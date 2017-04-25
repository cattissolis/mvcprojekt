<?php

class Model
{
   public function getAllDjur($id, $name, $year, $legs, $type)
   {
       $get_stm = $this->prepare('SELECT * FROM `djur`');
       $get_stm->execute();
       return $get_stm; setFetchMode(PDO:: FETCH_CLASS, 'djur');
   }
}


?>