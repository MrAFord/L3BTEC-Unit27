<!DOCTYPE html>
<html>
<head>
    <title>Example: List files on server</title>
    <style>
		body {
			padding-top: 10px; 
			font-family: "Segoe UI", Verdana, Helvetica, Sans;
		}
		h1 { font-size: 		24pt;}
		li { padding-bottom:	8pt;}
	</style>
</head>
<body>

<h1>Listing files on server</h1>

<p>This PHP script lists the files from a folder on the server.</p>

        
<?php
	// set the path on the server that we want to view files
	// YOU WILL NEED TO SET THIS TO A PATH ON YOUR SERVER
	// BE CAREFUL WHAT YOU SHARE>>>>>>>>>!!!!!!!
	$d = dir("/Users/mrford/Sites/mrford.koding.com/website/unit27/examples/files");


	// Get the path to the directory     
	echo "<p>Path: " . $d->path . "</p>";
	
	// output the files in the folder
    echo "<p>Contents:</p>";
	// we'll use an HTML unordered list to hold the filenames as list items (LI)
	echo "<ul>";
		// loop and keep reading from the path object 
		while (false !== ($entry = $d->read())) {
			/* 
				create a list item for each entry in the folder. Include an anchor so we can click to open that file */
			if($entry != "." && $entry != "..") {
				echo "<li><a href='".$entry."'>".$entry."</a></li>";
				
			}
		}
		echo "</ul>";

	// tidy up by closing the directory
	$d->close();
?>


</body>
</html>