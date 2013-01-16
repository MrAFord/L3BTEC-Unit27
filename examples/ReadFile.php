<!DOCTYPE html>
<html>
    <title>PHP Example: read file</title>
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/css/bootstrap-combined.min.css" rel="stylesheet">
	<style>
		body {
			padding-top: 10px; /* 60px to make the container go all the way to the bottom of the topbar */
			font-family: "Segoe UI", Verdana, Helvetica, Sans;
		}
		h1 {
			font-size: 	24pt;
		}
		li { padding-bottom: 8pt;}
	</style>

<body>

	<div class="container">
    
		<div class="row-fluid">
			<div class="span12">	
			<h1>Unit 27: Web Server Scripting</h1>
            <h2>PHP Example: Read File</h2>
			</div>
		</div>
	
	<div class="row-fluid">
        <div class="span3">
            <div class="well">
                This PHP script opens a file on the server, reads each line and outputs them via this web page.
            </div>
        </div>
        <div class="span9">
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
            </div> <!-- /span 9 -->
        </div> <!-- /row-fluid -->
    </div> <!-- /container -->

</body>
</html>