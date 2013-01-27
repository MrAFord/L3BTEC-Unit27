<!DOCTYPE html>
<html>
<head>
    <title>Example: Info</title>
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
    
	<h1>PHP Server Info</h1>

	<p>Let's ask PHP for some information about itself.</p>	
	   
	<p>This page uses the PHP $_SERVER variable to display information about the server and client browser.
	<br/>
            
	For background details see the <a href="http://uk3.php.net/manual/en/reserved.variables.server.php">PHP Language Reference</a>.

	</p>
	
	<h2>Client information</h2>
			
		<p>Client browser (the user agent string):<br/>
		<?php
		   echo  $_SERVER["HTTP_USER_AGENT"] ;				
						
		?>
		</p>
			
		<p>Client IP Address and host name:
		<?php
		   echo  $_SERVER["REMOTE_ADDR"] . " &mdash; ";			
		   echo  $_SERVER["REMOTE_HOST"]  ;  			
					
		?>
		</p>

		<p>User name if logged in:
		<?php
		   echo  $_SERVER["REMOTE_USER"] ;		
		?>
		</p>
		
		<h2>Server information</h2>
		
		<p>Server IP and host name:<br/>
		<?php
		   echo  $_SERVER["SERVER_ADDR"] . " &mdash; ";				
			echo  $_SERVER["SERVER_NAME"] ;		
		?>
		</p>
		
		<p>Server software:<br/>
		<?php
		   echo  $_SERVER["SERVER_SOFTWARE"] ;		
		?>
		</p>

		<p>PHP Script:<br/>
		<?php
		   echo  $_SERVER["PHP_SELF"] ;		
		?>
		</p>

</body>
</html>
