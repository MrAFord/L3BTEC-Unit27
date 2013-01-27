<!DOCTYPE html>
<html>
<head>
    <title>Example: Simple PHP Intro</title>
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
	<h1>Simple PHP Intro</h1>
	
	<p>This page has examples of basic PHP scripting. You should compare the PHP scipting code in the PHP file to that shown in the browser (you can use <strong>show source</strong> in your browser).
	<br/>
	<br/>
	Try changing the values of $firstnumber, $secondnumber, $quickanimal and $lazyanimal and see what happens when you reload the page.
	<br/>
	<br/>
    For background details see the <a href="http://php.net/manual/en/langref.php">PHP Language Reference</a>.
    </p>
		
	<h2>Variables</h2>
			
			<?php
				
				// define and assign variables like this...
				$quickanimal = "fox";
				$lazyanimal = "dog";
				
				// now we can output some HTML like this...
				echo "<p>The quick brown ", $quickanimal, " jumped over the lazy ", $lazyanimal, ".</p>";
						
			?>
			
			<!-- now let's output almost the same thing using HTML -->
			<p>The quick brown <?php echo $lazyanimal ?> jumped over the lazy <?php echo $quickanimal ?>.</p>
			
	<h2>Operations</h2>
			
			<?php
			
				$firstnumber = 40;
				$secondnumber = 2;
			
			?>
			<p>Mr. Ford's most favourite number is, of course, <?php echo $firstnumber + $secondnumber ?>.</p>
            <p><?php echo $firstnumber ?> times <?php echo $secondnumber ?> is equal to <?php echo ($firstnumber * $secondnumber); ?>.</p> 
		
	<h2>Looping</h2>
            
            <p>Looping = doing things more than once. Sometimes also called <em>iteration</em></p>
			
			<?php
            
                $smallernumber = $firstnumber / $secondnumber;
                
                // QUESTION: where does the number dislayed in the browser start and stop. Why?
			
			    for($i=0;$i<$smallernumber;$i++) {
    		        echo "<p>The number is " . $i . "</p>"; 
                 
			    }
            
            
			?>
            
            
	<h2>Conditional</h2>
    		
            <p>Conditional = only doing something when something else is true. Sometimes also called <em>branching</em> because the branch you take 
            depends on something.</p>
            
			<?php
            
                $smallernumber = $firstnumber / $secondnumber;
                
               
			
			    if($smallernumber > 10) {
    		        echo "<p>The small number isn't small enough.</p>"; 
                }
            
            
			?>
		
		
</body>       
</html>
