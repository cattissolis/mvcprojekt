<?php

class Djur {

    private $id;
    private $name;
    private $year;
    private $legs;
    private $type;


        function __construct($id, $name, $year, $legs, $type) {
            $this->id = $id;
            $this->name = $name;
            $this->year = $year;
            $this->legs = $legs;
            $this->type = $type;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getYear() {
        return $this->year;
    }

    public function getLegs() {
        return $this->legs;
    }

     public function getType() {
        return $this->type;
    }

    public function setId($id) {
        return $this->id;
    }

    public function setName($name) {
        return $this->name;
    }

    public function setYear($year) {
        return $this->year;
    }

    public function setLegs($legs) {
        return $this->legs;
    }

    public function setType($type) {
        return $this->type;
    }

}

?>