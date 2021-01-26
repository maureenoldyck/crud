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

        $this->databaseManager->database->query("INSERT INTO plant_repository (plant_name, place, water)
        VALUES ('$this->name', '$this->place' , '$this->water' )");
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

    }


    public function edit()
    {

        $id = $_GET['edit'];

        $new_name = $_POST['edit_name'];
        $new_place = $_POST['edit_place'];
        $new_water = $_POST['edit_water'];
            
        header('location: index.php');
        return $this->databaseManager->database->query("UPDATE plant_repository SET plant_name = '$new_name', place = '$new_place', water = '$new_water' WHERE id=$id");
        
    }


}