<?php namespace Model;

use Model\City as City;

class EventPlace {

    private $description;
    private $city;


    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description=$description;
    }

    public function getCity(){
        return $this->city;
    }

    public function setCity(City $city){
        $this->city=$city;
    }



}


?>