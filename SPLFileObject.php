<?php
	$file = new SplFileObject("filename.txt");
	foreach($file as $line) {
		echo "  <em>".$line."</em><br />";
	}
?>
