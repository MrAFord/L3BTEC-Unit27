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
	<p>This PHP script opens a file on the server, reads each <strong>even</strong> line and outputs them via this web page.</p>
	<?php
		$lineNumber = 0;
		// open the file - should be in the same folder on the server as this script.
		$file = fopen('example.txt','r') or die($php_errormsg);
		while (! feof($file)) {                     // continue until we get to the end of the file (EOF)
			$linenumber++;                          // add 1 to the lineNumber count
			if ($line = fgets($file)) {             // read the next line from the file
				if($linenumber % 2 == 0) {          // test to see if it's an even line (number % 2 giver the remainder of dividing by 2)
					echo $line . "<br/>";
				}
			}
		}
		fclose($file) or die($php_errormsg);
	?>

</body>
</html>