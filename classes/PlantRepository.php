<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class PlantRepository
{
    private $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create()
    {
        $name = $_POST['name'];
        $place = $_POST['place'];
        $water = $_POST['water'];

        $this->databaseManager->database->query("INSERT INTO plant_repository (plant_name, place, water)
        VALUES ('$name', '$place' , '$water' )");
 
        // Close connection
        // mysqli_close($this->databaseManager);
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

    }

    public function delete()
    {

    }

}