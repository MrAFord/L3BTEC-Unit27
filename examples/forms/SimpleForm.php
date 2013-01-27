<!DOCTYPE html>
<html>
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

<h1>Combined Form and Processing</h1>
<p>This is an example of using a FORM in a PHP file to get input from a user. The same file dispalys the form and processes the response (the FORM tag sets the action attribute to point to the same file (it self).</p>
       
        
<!-- the PHP script block below processes the form data submitted -->		
<?php

	// here we're extrating the values of firstname and age from the $_POST variable
	// this syntax shows how to get the value for a specific key. Compare it to the
	// technique used in dumpForm.php
    $firstname = $_POST["firstname"];
    $age = $_POST["age"];
    
    $phpAge = 42; // define a variable with the age of this script
    
    if( $firstname != "") { // isn't blank
        echo "Hello ", $firstname,  " how are you?";
    } else {
        echo "Hello. Who are you?";
    }
    
    if( $age != "") {  // isn't blank
            if( $age > $phpAge) { // test if age submitted is greater than the age of our script
                echo "<p>You're older than me!</p>";
            } else {
                echo "<p>Youngster!</p>";
            }
        
    } else {
        echo "<p>How old are you?</p>";
    }
      

?>

<!-- the following HTML block displays the form on the page. it also uses PHP to add  values 
	to the form fields (if the form has been submitted). These values come from the PHP script 
	block above. -->

		<!-- LOOK! the action attribute points to this file -->
        <form action="SimpleForm.php" method="POST">
    
            <!-- note the use of PHP to add default vlaues to the text box. -->
            <!-- QUESTION: where do $firstname and $age come from? -->
		    First name: <input type="text" name="firstname" value="<?php echo $firstname; ?>" ><br>
            Age: <input type="text" name="age" value="<?php echo $age; ?>">
            <input type="submit" value="Update" />
		
	    </form>


</body>
</html>