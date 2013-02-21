<h1>Creating Table</h1>

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
    // Create table
    mysql_select_db($user, $con);
    $sql = "CREATE TABLE Persons
    (
    FirstName varchar(15),
    LastName varchar(15),
    Age int
    )";
    
    // Execute query
    mysql_query($sql,$con);
    
    mysql_close($con);

?>
<h1>...done</h1>