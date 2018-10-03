<?php namespace Model;

use Model\EventSeats as EventSeats;

class CartLine{

	private $quantity;
	private $eventSeats;

	public function getQuantity(){
		return $this->quantity;
	}

	public function setQuantity($quantity){
		$this->quantity=$quantity;
	}

	public function getEventSeats(){
		return $this->eventSeats;
	}

	public function setEventSeats(EventSeats $eventSeats){
		$this->eventSeats=$eventSeats;
	}
}

?>