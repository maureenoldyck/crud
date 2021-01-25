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

    }

    // Get one
    public function find()
    {

    }

    // Get all
    public function get()
    {
        // TODO: replace dummy data by real one
        return [
            ['name' => 'aloe vera', 'place' => 'indirect sunlight', 'water' => 'allow soil to dry out before watering again'],
            ['name' => 'pannekoekenplant', 'place' => 'indirect sunlight', 'water' => 'keep soil damp'],
            ['name' => 'sanseviera trifasciata', 'place' => 'indirect sunlight', 'water' => 'when soil is dry, rewater'],
            ['name' => 'alocasia amazonica', 'place' => 'half shade', 'water' => 'keep soil damp'],
            ['name' => 'sanseviera cylindrica', 'place' => 'indirect sunlight', 'water' => 'when soil is dry, rewater'],
            ['name' => 'spider plant', 'place' => 'bright place', 'water' => 'keep soil damp'],
        ];

        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->database-> (runYourQueryHere)
    }

    public function update()
    {

    }

    public function delete()
    {

    }

}