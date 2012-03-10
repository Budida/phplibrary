<?php
	$directory = new DirectoryIterator("docs");
	foreach($directory as $file) {
		if(!$file->isDot()) {
			echo "Filename: ".$file->getFilename();
			echo " File inode ". $file->getInode();
			echo " File Type ".$file->getType();
			echo " File Path ".$file->getPathname();
			echo " File size ".$file->getSize();
			echo "<br />";
		}
	}
?>
