<!DOCTYPE html>
<html>
 <head>
    <title>Example: Write files with PHP</title>
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
	<h1>Write files with PHP</h1>

    <p>This PHP script opens a file on the server and writes some information to it.</p>
       
    <?php 
        $fn = "file.txt";                   // the name of the file we want to write to (on the server)
        $file = fopen($fn, "a+");           // open the file for writing
        $size = filesize($fn);              // get the size of the file
        
        if($_POST['addition']) {            // check to see if anything was in the addition field of the form submitted
            fwrite($file, $_POST['addition']);  // write to the file
        }
        
        $text = fread($file, $size);        // 
        fclose($file); 
    ?> 
    <form action="<?=$PHP_SELF?>" method="post"> 
    <textarea id="filetext"><?php echo $text ?></textarea><br/> 
    <input type="text" name="addition"/> 
    <input type="submit"/> 
    </form>
    

    

</body>
</html>