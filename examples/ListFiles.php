<html>

<head><style>body{font-family: "Segoe UI";}</style></head>

<body>

<?php
	// set the path on the server that we want to view files
	$d = dir("/website/upload/");
	// print out some stats 
	echo "Handle: " . $d->handle . "<br>\n";
	echo "Path: " . $d->path . "<br>\n";
	echo "Contents:";
	// create an unorder list to hold the filenames
	echo "<ul>";
	// loop and keep reading from the path object 
	while (false !== ($entry = $d->read())) {
		/* 
			create a list item for each entry in the folder. Include an anchor so we can click to open that file */
		// QUESTION: for this to work where must the file me located relative to this PHP file?
		echo "<li><a href='".$entry."'>".$entry."</a></li>\n";
	}
	echo "</ul>";

	// tidy up
	$d->close();
?>

</body>
</html>