<?php

class Model
{
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

   public function getAllDjur()
   {
       $get_stm = $this->db->prepare('SELECT * FROM `djur`');
       $get_stm->execute();
       $get_stm->setFetchMode(PDO:: FETCH_ASSOC);
       $djur = $get_stm->fetchAll();
       $djur = array_map(function($item) {
        return new Djur($item['id'],$item['name'],$item['year'],$item['legs'],$item['type']);
       }, $djur);
       return $djur; 
   }
}


?>