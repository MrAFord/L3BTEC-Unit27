<h1>Show Create Table</h1>

<!-- Given a table in the SQL database, recreate the SQL CREATE command -->

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

    $result = mysql_query("SHOW CREATE TABLE Persons");
   
    while ($row = mysql_fetch_array($result)) {
        echo '<pre>';
        print_r ($row);
        echo '</pre>';
    }
        
    
    
    mysql_close($con);

?>
<h1>...done</h1>