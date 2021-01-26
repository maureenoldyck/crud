<?php

// This class will manage the connection to the database
// It will be passed on the other classes who need it
class DatabaseManager
{
    // These are private: only this class needs them
    private $host;
    private $name;
    private $password;
    // This one is public, so we can use it outside of this class
    // We could also use a private variable and a getter (but let's not make things too complicated at this point)
    public $database = 'crud';

    public function __construct(string $host, string $name, string $password)
    {
        // Set any user and password information
        $this->host = $host;
        $this->name = $name;
        $this->password = $password;
    }

    public function connect()
    {
        //make the connection to the database
        // $this->database =  new mysqli($this->host, $this->name, $this->password, $this->database);

        try {
            $this->database = new PDO("mysql:host=$this->host;dbname=$this->database", $this->name, $this->password);
            // set the PDO error mode to exception
            $this->database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }

    }
}

