<?php namespace Model;

use Model\PurchaseLine as PurchaseLine;

class Purchase{

	private $purchaseLine=array();
	private $total=0;

	public function getPurchaseLines(){
		return $this->purchaseLine;
	}

	public function setPurchaseLine(PurchaseLine $purchaseLine){
		$this->purchaseLine=$purchaseLine;
	}

	public function getTotal(){
		return $this->total;
	}

	public function setTotal($total){
		$this->total=$total;
	}
}

?>