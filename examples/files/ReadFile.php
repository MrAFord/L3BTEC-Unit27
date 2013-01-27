<!DOCTYPE html>
<html>
 <head>
    <title>Example: Read files with PHP</title>
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
	<h1>Read files with PHP</h1>

    <p>This PHP script opens a file on the server, reads each line and outputs them via this web page.</p>
       
	<?php
	   
		// open the file - should be in the same folder on the server as this script.
		$file = fopen('example.txt','r') or die($php_errormsg);
		while (! feof($file)) { // continue until we get to the end of the file (EOF)
			if ($line = fgets($file)) { // read the next line from the file
				echo $line . "<br/>";
			}
		}
		fclose($file) or die($php_errormsg);
	?>

</body>
</html>