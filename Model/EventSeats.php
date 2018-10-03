<?php namespace Model;

use Model\TypeOfSeat as TypeOfSeat;
use Model\Presentation as Presentation;

class EventSeats{

	private $quantity;
	private $price;
	private $remanents;
	private $typeOfSeat;
	private $presentation;

	public function getQuantity(){
		return $this->quantity;
	}
	public function setQuantity($quantity){
		$this->quantity=$quantity;
	}

	public function getPrice(){
		return $this->price;
	}
	public function setPrice($price){
		$this->price=$price;
	}

	public function getRemanents(){
		return $this->remanents;
	}
	public function setRemanents($remanents){
		$this->remanents=$remanents;
	}

	public function setTypeOfSeat(TypeOfSeat $typeOfSeat){
		$this->typeOfSeat=$typeOfSeat;
	}

	public function getTypeOfSeat(){
		return $this->typeOfSeat;
	}

	public function setPresentation(Presentation $presentation){
		$this->presentation=$presentation;
	}

	public function getPresentation(){
		return $this->presentation;
	}

}

?>