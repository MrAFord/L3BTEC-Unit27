<!DOCTYPE html>
<html>
    <title>PHP Example: Simple Form</title>
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


        
<?php
    // parameters passed to the script from the form are in the PHP $_POST variable
    // QUESTION: where do you think the POST bit of $_POST comes from??
   
    echo "using print_r to print out the contents of POST<br>";
    print_r($_POST);
    
    echo "using foreach to print out the keys and values from POST<br>";
    foreach ($_POST as $key => $value) {
        
        echo "<p>".$key." => $value </p>";
        
    }
    
    
    

?>



</body>
</html>