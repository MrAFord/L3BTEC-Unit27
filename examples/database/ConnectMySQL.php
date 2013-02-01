<h1>Creating Table</h1>

<?php

    $user="";
    $password="";
    $database="";
    $con = mysql_connect($database,$user,$password);
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }
    
    // some code
    
    mysql_close($con);

?>
<h1>...done</h1>