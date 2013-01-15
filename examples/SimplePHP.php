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
          <div class="well">This page has examples of basic PHP scripting.</div>
        </div>
        <div class="span9">
		
			<h2>Variables</h2>
			
			<?php
				
				// define and assign variables like this...
				$quickanimal = "fox";
				$lazyanimal = "dog";
				
				// now we can output some HTML like this...
				echo "<p>The quick brown ", $quickanimal, " jumped over the lazy ", $lazyanimal, </p>;
						
			?>
			
			<!-- now let's output almost the same thing using HTML -->
			<p>The quick brown <?php echo $lazyanimal ?> jumped over the lazy <?php echo $quickanimal ?> .</p>
			
			<h2>Operations</h2>
			
			<?php
			
				$firstnumber = 40;
				$secondnumber = 2;
			
			?>
			<p>Mr. Ford's most favourite number is, of course, <?php echo $firstnumber + $secondnumber ?>.</p>
		
        </div>
        <!-- /span 9 -->
      </div>
      <!-- /row-fluid -->
    </div>
    <!-- /container -->
  </body>
</html>
