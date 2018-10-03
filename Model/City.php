<?php namespace Model;

class City {

    private $name;
    private $province;
    private $country;

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name=$name;
    }

    public function getProvince(){
        return $this->province;
    }

    public function setProvince($province){
        $this->province=$province;
    }

    public function getCountry(){
        return $this->country;
    }

    public function setCountry($country){
        $this->country=$country;
    }


}
?>