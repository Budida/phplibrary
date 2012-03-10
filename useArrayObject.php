<?php
	include_once("ExtendedArrayObject.php");
	function speak($value) {
		echo $value;
	}
	$newArray = new ExtendedArrayObject(array(1,2,3,4,5,6));
	//$newArray->each(speak); //pass callback for loop
	print_r($newArray->without(2,3,4)); //substract
	$newArray->inspect(); //display array in nice manner
	
	echo $newArray->indexOf(5); //position by value
	print_r($newArray->reverse()); //reverse the array
	print_r($newArray->reverse(true)); /*for changing array itself*/
	echo $newArray->shift();//shifts the first value of the array and returns it
	echo $newArray->pop();// pops out the last value of array
	echo $newArray->last();
	echo $newArray->first(); //the first element

?>
