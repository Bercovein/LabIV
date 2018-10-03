<?php namespace Model;

use Model\EventPlace as EventPlace;
use Model\Event as Event;
use Model\Artist as Artist;
use Model\EventSeats as EventSeats;

class Presentation{

	private $date;
	private $eventPlace;
	private $event;
	private $artistList=array();
	private $eventSeats=array();

	public function getDate(){
		return $this->date;
	}
	public function setDate(Date $date){
		$this->date=$date;
	}

	public function getEvent(){
		return $this->event;
	}
	public function setEvent(Event $event){
		$this->event=$event;
	}

	public function getEventPlace(){
		return $this->eventPlace;
	}
	public function setEventPlace(EventPlace $eventPlace){
		$this->eventPlace=$eventPlace;
	}

	public function getArtistList(){
		return $this->artistList;		
	}

	public function setArtistList($artistList){
		$this->artistList=$artistList;
	}

	public function getEventSeats(){
		return array_values($this->eventSeats);
	}

	public function setEventSeats($eventSeats){
		$this->eventSeats=$eventSeats;
	}
}

?>