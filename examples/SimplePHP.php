<!DOCTYPE html>
<html>
  <head>
    <title>PHP Example: Simple PHP</title>
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/css/bootstrap-combined.min.css" rel="stylesheet" />
    <style>
                body {
                        padding-top: 10px; /* 60px to make the container go all the way to the bottom of the topbar */
                        font-family: &amp;quot;Segoe UI&amp;quot;, Verdana, Helvetica, Sans;
                }
                h1 {
                        font-size:      24pt;
                }
                li { padding-bottom: 8pt;}
        
</style>
  </head>
  <body>
    <div class="container">
      <div class="row-fluid">
        <div class="span12">
          <h1>Unit 27: Web Server Scripting</h1>
          <h2>PHP Example: Simple PHP</h2>
        </div>
      </div>
      <div class="row-fluid">
        <div class="span3">
          <div class="well">This page has examples of basic PHP scripting. You should compare the PHP scipting code in the PHP file to that
          shown in the browser (you can use <strong>show source</strong> in your browser).
          <br/>
                    <br/>
            Try changing the values of $firstnumber, $secondnumber, $quickanimal and $lazyanimal and see what happens when you reload the page.
          <br/>
                    <br/>
            
            For background details see the <a href="http://php.net/manual/en/langref.php">PHP Language Reference</a>.
          </div>
        </div>
        <div class="span9">
		
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
		
		
        
        </div>
        <!-- /span 9 -->
      </div>
      <!-- /row-fluid -->
    </div>
    <!-- /container -->
  </body>
</html>
