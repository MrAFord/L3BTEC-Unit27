<html>
<head>
    <title>PHP Hello World</title>
    <style>
		body {
			padding-top: 10px; 
			font-family: "Segoe UI", Verdana, Helvetica, Sans;
		}
		h1 { font-size: 		24pt;}
		li { padding-bottom:	8pt;}
	</style>
</head>

<!-- this is a PHP file - look at the .php extension! - but we
	can mix HTML and PHP content.
	Look carefully and you will see...
	
	* Regular HTML tags like <p> for a paragraph
	
	* A special tag that denotes PHP code like this...
	
	  <!php
	  
		// ... php code goes here
	  
	  ?>
	
	* The PHP code creating part of the web page using echo
	
	-->


<body>

	<!-- start with regular HTML -->
	<h1>PHP Hello World Example</h1>
	
	<p>In this example we're mixing	plain boring HTML with...</p>

	
	<!-- now include PHP code to write something out -->
	<?php
		// this is a comment in the PHP code

		echo "<p>...some cool PHP to say: <b>Hello, World</b></p>";

	?>

	<!-- and now back to regular HTML -->
	<p>Compare the source of this PHP file with the HTML source in the browser (use <strong>view source</strong> in the browser).</p>

</body>

</html>