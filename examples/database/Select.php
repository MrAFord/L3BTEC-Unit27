<h1>Query (select) from table</h1>

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

    $result = mysql_query("SELECT * FROM Persons");
    
    while($row = mysql_fetch_array($result))
      {
      echo "Name: " . $row['FirstName'] . " " . $row['lastName'] . 
            " Age: " . $row['Age'] ;
      echo "<br />";
      }

    
    mysql_close($con);

?>
<h1>...done</h1>