<?php

define('HOST','localhost');
define('DATABASENAME','test');
define('USER','gismi');
define('PASSWORD','1234');

class Connect{
    
    protected $connection;

    function __construct()
    {
        $this-> connectDataBase();
    }

    function connectDataBase()
    {

        try {
           $this-> connection = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USER, PASSWORD);
        } 
        catch (PDOException $e) {

            echo "Error!".$e->getMessage();
            
            die();
        }
    }
}


?>