<h1>Creating Table</h1>

<?php

    $user="mrford_qozaqafah";
    $password="aford42b2";
    $database="mysql0.db.koding.com";
    $con = mysql_connect($database,$user,$password);
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }
    
    // some code
    
    mysql_close($con);

?>
<h1>...done</h1>