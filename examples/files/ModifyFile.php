<!DOCTYPE html>
<html>
 <head>
    <title>Example: Modify files with PHP</title>
    <style>
		body {
			padding-top: 10px; 
			font-family: "Segoe UI", Verdana, Helvetica, Sans;
		}
		h1 { font-size: 		24pt;}
		li { padding-bottom:	8pt;}
	</style>
</head>
<body>
	<h1>Modify files with PHP</h1>

    <p>This PHP script opens a file on the server and reads it into memory. It then writes out the file.</p>
       
    <!-- First, let's copy a file (so we can make changes without messing up the original -->   
    <?php
        $originalFile = "example.txt";
        $tmpFile = "example_tmp.txt";
    
        $contents = file_get_contents($originalFile);
        file_put_contents($tmpFile, $contents);
     ?>
     
    <!-- now let's modify something in the tmpFile -->       
    <?php
        $contents = file_get_contents($tmpFile);
        $contents = strtoupper($contents); // convert to upper case
        $contents = preg_replace("/ALICE/", "BOB", $contents); // convert ALICE to BOB
        file_put_contents($tmpFile, $contents);
    ?>
    
    <H2>Debugging...</h2>
    
    <p>Let's show what's in the contents...</p>
    <hr />
    <?php echo $contents; ?>

    

</body>
</html>