<h1>Query (select) from table</h1>

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