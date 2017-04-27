<?php

class Delete
{
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

   public function deleteById($id)
   {

       $get_stm = $this->db->prepare('DELETE FROM `djur` WHERE `id` = :removeid');
        $get_stm->bindParam(':removeid', $id);
        $result = $get_stm->execute();
        return $result;
   }
}


?>