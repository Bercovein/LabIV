<?php namespace DAO;

use DAO\IDAO as IDAO;
use Model\Artist as Artist;
use DAO\SingletonDao as SingletonDao;

class DAOArtist extends SingletonDao implements IDAO {

	private $artistList = array();

	public function add($artist){
		if($artist != null)
			array_push($this->artistList, $artist);
	}

	public function getAll(){
		return $this->artistList;
	}

}

?>