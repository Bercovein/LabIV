<?php namespace Model;

use Model\EventSeats as EventSeats;
use Model\Ticket as Ticket;

class PurchaseLine{

	private $quantity;
	private $price;
	private $eventSeat;
	private $tickets=array();

	public function getQuantity(){
		return $this->quantity;
	}

	public function setQuantity($quantity){
		$this->quantity=$quantity;
	}

	public function getPrice(){
		return $this->eventSeat->getPrice;
	}

	public function setPrice($price){
		$this->price=$price;
	}

	public function getEventSeat(){
		return $this->eventSeat;
	}

	public function setEventSeat(EventSeats $eventSeat){
		$this->eventSeat=$eventSeat;
	}

	public function getTickets(){
		return $this->tickets;
	}

	public function setTicket($ticket){
		$this->tickets=$ticket;
	}
}


?>