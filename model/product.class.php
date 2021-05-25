<?php

class Product
{
	public $product_id,$name,$description,$seller_id,$buy_date,$score,$price;

	function __construct($product_id,$seller_id,$name,$description,$price,$buy_date=NULL,$score=NULL)
	{
		


		$this->product_id = $product_id;
		$this->name = $name;
		$this->description = $description;
        $this->seller_id = $seller_id;
        $this->buy_date = $buy_date;
        $this->score = $score;
        $this->price = $price;

	}

	function getColor()
	{
		
	}
	function setCSS($newClass){
		$this->cssEnums .= $newClass . " ";
	}


	function __get( $prop ) { return $this->$prop; }
	function __set( $prop, $val ) { $this->$prop = $val; return $this; }
}

?>