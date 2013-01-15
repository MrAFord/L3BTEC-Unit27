<!DOCTYPE html>
<html>
  <head>
    <title>PHP Example: Info</title>
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
          <h2>PHP Example: Info</h2>
        </div>
      </div>
      <div class="row-fluid">
        <div class="span3">
          <div class="well">This page uses the PHP $_SERVER variable to display information about the server and client browser.
          <br/>
            
            For background details see the <a href="http://uk3.php.net/manual/en/reserved.variables.server.php">PHP Language Reference</a>.
          </div>
        </div>
        <div class="span9">
    	
			<h2>Client information</h2>
			
            <p>Client browser (the user agent string):<br/>
			<?php
               echo  $_SERVER["HTTP_USER_AGENT"] ;				
						
			?>
            </p>
			
            <p>Client IP Address and host name:
    		<?php
               echo  $_SERVER["REMOTE_ADDR"] . " &mdash; ";			
               echo  $_SERVER["REMOTE_HOST"]  ;  			
						
			?>
            </p>

            <p>USer name if logged in:
        	<?php
               echo  $_SERVER["REMOTE_USER"] ;
						
			?>
            </p>
            
            <h2>Server information</h2>
    		
            <p>Server IP and host name:<br/>
			<?php
               echo  $_SERVER["SERVER_ADDR"] . " &mdash; ";				
				echo  $_SERVER["SERVER_NAME"] ;		
			?>
            </p>
            
            <p>Server software:<br/>
    		<?php
               echo  $_SERVER["SERVER_SOFTWARE"] ;		
			?>
            </p>

            <p>PHP Script:<br/>
        	<?php
               echo  $_SERVER["PHP_SELF"] ;		
			?>
            </p>

        
	
        
        </div>
        <!-- /span 9 -->
      </div>
      <!-- /row-fluid -->
    </div>
    <!-- /container -->
  </body>
</html>
