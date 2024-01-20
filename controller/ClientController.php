<?php


require_once('./models/Client.php');

class ClientController{

    private $model;

    function __construct()
    {
        $this->model = new Client();
    }
    
    function getAll()
     {
        $resultData = $this->model->getAll();
        require_once('./view/home.php');
        

     }

}


?>