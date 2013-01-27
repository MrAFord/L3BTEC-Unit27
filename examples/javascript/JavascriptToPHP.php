<!DOCTYPE html>
<html>
<head>
    <title>Example: Javascript and PHP</title>
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
	
	<h1>Using Javascipt and PHP</h1>
	
	<p>There are some things that only the browser running on the client computer can know and other things that only the PHP script running on the server can know. What happens if your application needs to make decisions based on both those pieces of information?
	</p>
  
	<p>This page uses one technique to gather information from your browser using Javascript and then send the information to the server where it can be processed by PHP.
	<br/>
	The Javascript code in this file runs on the client to gather the information and place it in a hidden form field. The PHP code in this file runs on the server to retrieve the information from the form and display it.
	<br/>
    Compare the script on the server to the HTML source displayed in the browser. Can you see what processing is done on the server and what is done on the client?
	</p>
        
	<h2>Client information</h2>
			
	<p>What are the inner dimensions of this browser window?</p>
                    
		<!-- Let's use some Javascript ON THE CLIENT to find out the window size that the browser
			is set to you can resize your browser window to see this change (refresh the page) -->
            
		<p>Javascript says: 
		<script>
			document.write(window.innerHeight + " x " +window.innerWidth);
		</script>
		</p>
        
		
		<!-- How can we get that information back to the server so PHP can do something 
			with it? We'll create a form with __hidden__ fields to hold values for the width 
			and height -->    
		<form action="JavascriptToPHP.php" name="hiddenForm" method="POST">
			<input type="hidden" id="width1" name="width" value="unknown" />
			<input type="hidden" id="height1"name="height" value="unknown" />
			<input type="submit" value="Update" />
		</form>
		
		<!-- This Javascript code sets the values of the __hidden__ width and height fields 
				in the form -->
		<script>
			document.getElementById('width1').value = window.innerWidth;
			document.getElementById('height1').value = window.innerHeight;
		</script>
            
            
		<!-- ON THE SERVER we'll use some PHP to extract the width and height from the submitted 	form and display them. Note that you'll need to Submit the form in order to send (POST)
		the information to the server-->
		<p>PHP says: 
            <?php
                echo ($_POST["height"] . " x " . $_POST["width"]);           
            ?>
		</p>
        
        
</body>
</html>
