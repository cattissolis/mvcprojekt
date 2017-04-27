<?php

class Controller
{
    private $model;
    public function __construct(PDO $db)
    {
        $this->model = new Model($db);
    }
    public function index()
    {
        $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS);
        if (empty($page))
            require_once('view/viewDjur.php');
        elseif ($page === "djur") {
            require_once('view/viewDjur.php');
        } else {
            //require_once('templates/start.php');
        }
    }
    

    public function getAllDjur()
    {
        return $this->model->getAllDjur();
        global $db;
    }
    public function updateDjur(){
        return $this->model->updateDjur();
         global $db;
    }

    public function deleteById(){
        return $this->model->deleteById();
         global $db;
    }

    public function createDjur(){
        return $this->model->createDjur();
         global $db;
    }
}