<?php

class Transaction
{
	public $buyer_id,$seller_id ,$product_id, $buy_date, $price,$comment, $grade, $comment_creation_date;

	function __construct(  $buyer_id,$seller_id ,$product_id, $buy_date, $price,$comment, $grade, $comment_creation_date)
	{
		$this->buyer_id = $buyer_id;
		$this->seller_id = $seller_id;
		$this->product_id = $product_id;
		$this->buy_date = $buy_date;
		$this->price = $price;
		$this->comment = $comment;
		$this->grade = $grade;
		$this->comment_creation_date = $comment_creation_date;

	}

	function __get( $prop ) { return $this->$prop; }
	function __set( $prop, $val ) { $this->$prop = $val; return $this; }
}

?>
