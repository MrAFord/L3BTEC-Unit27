/* PHP file to process file uploads */

<?php

	/* location we want files moved to _after_ upload (check permissions) */
	$uploaddir = '/website/upload/';
	
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

	
	echo '<pre>';
	// try and move the file (note usefile is the name of the file input in the form that called this file
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
		echo "File is valid, and was successfully uploaded.\n";
	} else {
		echo "Possible file upload attack!\n";
	}

	// output some data...
	echo 'Here is some more debugging info:';
	print_r($_FILES);
	echo 'Any errors?:';
	print_r($_FILES['userfile']['error']);

	print "</pre>";

	print "<p><a href='list.php'>List Files</a></p>";

?>