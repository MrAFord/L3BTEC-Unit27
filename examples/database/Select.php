<h1>Query (select) from table</h1>

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
    
    mysql_select_db("mrford_qozaqafah", $con);

    $result = mysql_query("SELECT * FROM contacts");
    
    while($row = mysql_fetch_array($result))
      {
      echo "Name: " . $row['first'] . " " . $row['last'] . " Email: " . $row['email'] ;
      echo "<br />";
      }

    
    mysql_close($con);

?>
<h1>...done</h1>