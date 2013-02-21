<h1>Inserting Values</h1>

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

    mysql_query("INSERT INTO `mrford_qozaqafah`.`contacts` (`id`, `first`, `last`, `phone`, `mobile`, `fax`, `email`, `web`) VALUES ('2', 'mr', 'ford', '123 1234 4443', '123 1234 4444', '', 'ford@blah.com', 'www.web.com');");
   
    echo $result;   
    
    mysql_close($con);

?>
<h1>...done</h1>