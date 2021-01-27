<?php
// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class PlantRepository
{
    private $databaseManager;
    public $name; 
    public $place;
    public $water;
 

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create()
    {
        $this->name = $_POST['name'];
        $this->place = $_POST['place'];
        $this->water = $_POST['water'];
        $this->water_date = $_POST['water_date'];

        $this->databaseManager->database->query("INSERT INTO plant_repository (plant_name, place, water, date_last_watered)
        VALUES ('$this->name', '$this->place' , '$this->water', '$this->water_date' )");
    }

    // Get one
    public function find()
    {

    }

    // Get all
    public function get()
    {
        if (!empty($_POST['submit'])) {
            $this->create();
        }

        // We get the database connection first, so we can apply our queries with it
        return $this->databaseManager->database->query('SELECT * FROM plant_repository');
    }

    public function update()
    {
        $id = $_GET['edit'];

        if (!empty($_POST['edit'])) {
            $this->edit();
        }

        return $this->databaseManager->database->query("SELECT * FROM plant_repository WHERE id=$id");

    }

    public function delete()
    {

        $id = $_GET['delete'];

        if (!empty($_POST['confirm_delete'])) {
            $this->confirm_delete();
        }

        return $this->databaseManager->database->query("SELECT * FROM plant_repository WHERE id=$id");

    }


    public function edit()
    {

        $id = $_GET['edit'];

        $new_name = $_POST['edit_name'];
        $new_place = $_POST['edit_place'];
        $new_water = $_POST['edit_water'];
        $new_water_date = $_POST['edit_water_date'];

            
        header('location: index.php');
        return $this->databaseManager->database->query("UPDATE plant_repository SET plant_name = '$new_name', place = '$new_place', water = '$new_water', date_last_watered = '$new_water_date' WHERE id=$id");
        
    }


    public function confirm_delete()
    {
        $id = $_GET['delete'];

        header('location: index.php');
        return $this->databaseManager->database->query("DELETE FROM plant_repository WHERE id=$id");

    }

}