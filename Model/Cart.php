<?php namespace Model;

use Model\Client as Client;
use Model\CartLine as CartLine;

class Cart{

	private $total='0';
	private $client;
	private $cartLine=array();

	public function getTotal(){

		return $this->total;
	}

	public function setTotal($total){
		$this->total=$total;
	}

	public function getClient(){
		return $this->client;
	}

	public function setClient(Client $client){
		$this->client=$client;
	}

	public function getCartline(){
		return $this->cartLine;
	}

	public function setCartLine($cartline){
		$this->cartLine=$cartLine;
	}
}

?>