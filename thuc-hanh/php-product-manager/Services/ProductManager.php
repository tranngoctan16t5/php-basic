<?php 
  namespace Services;
  /**
   * 
   */
  class ProductManager
  {
  	private $produsts;
  	public function __construct()
  	{
  		$this->products = [];
  	}
  	public function add($product){
  		$this->products[] = $product;
  	}
  	public function getProducts(){
  		return $this->products;
  	}
  }

 ?>