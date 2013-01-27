<!DOCTYPE html>
<head>
    <title>HTML Example: Form</title>
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

<h1>Dump</h1>
<p>Here we'll just dump (write out) the contents of the $_POST variable that holds the information submitted by the form.</p>
<!-- the following block of PHP script just outputs the information submitted -->
<?php

    /* The parameters passed to the script from the form are in the PHP $_POST variable
     * QUESTION: where do you think the POST bit of $_POST comes from? Not sure, take
	  * 	a look at the submission METHOD attribue in the FORM tag */ 
    echo "<p>Using print_r to print out the contents of POST</p>";
    // use print_r to print out the contents of the array of items held in $_POST
	print_r($_POST);
    
	// here's an alternative method, we use foreach to iterate (loop) through
	// all the key-value pairs held in the $_POST variable and then just
	// print them out...
    echo "<p>Using foreach to print out the keys and values from POST</p>";
    foreach ($_POST as $key => $value) {
        
        echo "<p> $key => $value </p>";  // not how PHP automatically expands $key and $value
        
    }
    

?>

<h1>Process</h1>
<p>Now we'll do something a little more useful, we'll process the information submitted.</p>
<!-- the following block of PHP script iterates processes the $_POST variable -->
<?php

	/* We use foreach to iterate (loop) through all the key-value pairs held in 
	 *	the $_POST variable. For each $key we test to see if it's the
	 * one we want and then do something with it if it is...
	 */
    echo "<p>Using foreach to process the keys and values from POST</p>";
    foreach ($_POST as $key => $value) {
		
		if($key == "firstname") {
			echo "<h2>Name</h2>";
			echo "<p>Hello $value</p>";
		
		}
		
		if($key == "age") {
			echo "<h2>Age</h2>";
			$age = (int)$value;		// we use (int) to convert the value to an integer number
			echo "<p>It's niec to have someone with the experience of $value years with us.</p>";
			if($age < 42) {
				echo "<p>Youngster!</p>";
			
			}
		
		}
		
		if($key == "exampleradio") {
			echo "<h2>Radio Button</h2>";
			echo "<p>Wow, you picked $value</p>";
		
		}
		
		if($key == "pwd") {
			echo "<h2>Password</h2>";
			echo "<p>I hope that $value wasn't a secret password!</p>";
		
		}
		
		// a common task with passwords is to ask the user for their new password
		// twice and then compare to check that they are the same.
		// This reduces the risk that the user will mistype their password.
		
		// the following if statements look for form fields named pwd1 and pwd2
		// and compares them to check that they match. How would you update the form
		// so that this checks two entries to make sure the passwords are the same?
		if($key == "pwd1"){
            $pwd1 = $value;    
        }
        if($key == "pwd2"){
            $pwd2 = $value;
        }
		if($pwd1 != $pwd2) {	
			echo "<p>You passwords do not match</p>";
		}

		
		
		

		echo "<p> $key => $value </p>";  // not how PHP automatically expands $key and $value
        
    }
    

?>

</body>
</html>