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
    
    mysql_select_db($user, $con);


    $result = mysql_query("INSERT INTO Persons 
        (FirstName, LastName, Age) VALUES ('Bob', 'Builder', 67)");


    echo $result;   
    
    mysql_close($con);

?>
<h1>...done</h1>