<h1>Inserting Values</h1>

<?php

    $user="";
    $password="";
    $database="mysql0.db.koding.com";
    $con = mysql_connect($database,$user,$password);
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }
    
    // some code
    
    $newFirstName = "mary";
    $newLastName = "builder";
    $newAge = 36;
    
    mysql_select_db($user, $con);

    $query = "INSERT INTO Persons 
        (FirstName, LastName, Age) VALUES ('"
        .$newFirstName."', '"
        .$newLastName."'," 
        .$newAge.")";
        
    echo "<p>".$query."</p>";

    $result = mysql_query($query);


    echo $result;   
    
    mysql_close($con);

?>
<h1>...done</h1>