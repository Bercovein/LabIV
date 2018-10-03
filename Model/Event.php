<?php namespace Model;

use Model\Category as Category;

class Event {

    private $description;
    private $category;

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description=$description;
    }

    public function getCategory(){
        return $this->category;
    }

    public function setCategory(Category $category){
        $this->category=$category;
    }
}


?>