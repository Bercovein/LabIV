<?php namespace Model;

class Card{

	private $number;
	private $amount;

	public function getNumber(){
		return $this->number;
	}

	public function setNumber($number){
		$this->number=$number;
	}

	public function getAmount(){
		return $this->amount;
	}

	public function setAmount($amount){
		$this->amount=$amount;
	}
}


?>