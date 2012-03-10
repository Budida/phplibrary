<?php
	$fruits = array(
		"apple" => "yummy",
		"orange" => "ah ya, nice",
		"grape" => "wow, I love it!",
		"plum" => "nah, not me"
	);
	
	$obj = new ArrayObject($fruits);
	$it = $obj->getIterator();
	echo  "Iterating over ".$obj->count()." values<br />";
	while($it->valid()) {
		echo $it->key(). "=". $it->current()."<br />";
		$it->next();
	}
	echo  "<hr />";
	foreach($it as $key=>$value) {
		echo $key. "=".$value."<br />";
	}
?>
