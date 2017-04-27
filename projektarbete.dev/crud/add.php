<?php

class Add
{
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

   public function createDjur($id)
   {

       $get_stm = $this->db->prepare('INSERT INTO `djur` (`id`, `name`, `year`, `legs`, `type`) VALUES (:id, :name, :year, :legs, :type');
       $stm_insert = $pdo->prepare($sql);
        //$get_stm->bindParam(':removeid', $id);
        $result = $statement->execute(array("Bob","Desaunois",18));
        return $result;
   }
}


?>