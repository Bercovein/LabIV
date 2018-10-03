<?php namespace Model;

use Model\Purchase as Purchase;
use Model\Card as Card;

class Client{

	private $firstName;
	private $lastName;
	private $dni;
	private $card;
	private $purchase=array();


	public function getFirstName(){
		return $this->firstName;
	}

	public function setFirstName($firstName){
		$this->firstName=$firstName;
	}

	public function getLastName(){
		return $this->lastName;
	}

	public function setLastName($lastName){
		$this->lastName=$lastName;
	}

	public function getDni(){
		return $this->dni;
	}

	public function setDni($dni){
		$this->dni=$dni;
	}

	public function getPurchases(){
		return $this->purchase;
	}

	public function setPurchase($purchase){
		$this->purchase=$purchase;
	}

	public function getCard(){
		return $this->card;
	}

	public function setCard($card){
		$this->card=$card;
	}
}

?>