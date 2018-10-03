<?php namespace Model;

class Ticket{

	private $number;
	private $QRcode;
	//no se como funciona pero por ahora lo meto como una variable mas jeje 

	public function getNumber(){
		return $this->number;
	}

	public function setNumber($number){
		$this->number=$number;
	}

	public function getQRcode(){
		return $this->QRcode;
	}

	//esto no esta bien ( o si, no se, pero lo dejo de recordatorio)
	public function setQRcode(QRcode $QRcode){
		$this->QRcode=$QRcode;
	}
}

?>