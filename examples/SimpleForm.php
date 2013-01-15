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

	<div class="container">
    
		<div class="row-fluid">
			<div class="span12">	
			<h1>Unit 27: Web Server Scripting</h1>
            <h2>PHP Example: Simple Form</h2>
			</div>
		</div>
	
	<div class="row-fluid">
        <div class="span3">
            <div class="well">
                This is an example of using a FORM in a PHP file to get input from a user.
            </div>
        </div>
        <div class="span9">
        
<?php
    // parameters passed to the script from the form are in the PHP $_POST variable
    // QUESTION: where do you think the POST bit of $_POST comes from??
    // Let's start by extracting the firstname and age
    $firstname = $_POST["firstname"];
    $age = $_POST["age"];
    
    $phpAge = 42; // define a variable with the age of this script
    
    if( $firstname != "") { // isn't blank
        echo "Hello ", $firstname,  " how are you?";
    } else {
        echo "Hello. Who are you?";
    }
    
    if( $age != "") {  // ins't blank
            if( $age > $phpAge) { // test if age submitted is greater than the age of our script
                echo "<p>You're older than me!</p>";
            } else {
                echo "<p>Youngster!</p>";
            }
        
    } else {
        echo "<p>How old are you?</p>";
    }
    
    

?>



        <form action="SimpleForm.php" method="POST">
    
            <!-- not the use of PHP to add default vlaues to the text box. -->
            <!-- QUESTION: where do $firstname and $age come from? -->
            
		    First name: <input type="text" name="firstname" value="<?php echo $firstname; ?>" ><br>
            Age: <input type="text" name="age" value="<?php echo $age; ?>">
            <input type="submit" value="Update" />
		
	    </form>


            </div> <!-- /span 9 -->
        </div> <!-- /row-fluid -->
    </div> <!-- /container -->

</body>
</html>