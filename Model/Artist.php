<?php 
namespace Model;

class Artist {

    private $artisticName;

    public function getArtisticName(){
        return $this->artisticName;
    }

    public function setArtisticName($artisticName){
        $this->artisticName = $artisticName;
    }

}


?>