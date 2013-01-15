<!DOCTYPE html>
<html>
  <head>
    <title>PHP Example: Javascript to PHP</title>
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
          <h2>PHP Example: Javascript to PHP</h2>
        </div>
      </div>
      <div class="row-fluid">
        <div class="span3">
          <div class="well">This page gathers information from your browser using Javascript and then sends that to PHP on the server.
          <br/>
          Javascript runs on the client to gather the information and place it in a hidden form field. PHP runs on the server to retrieve the information from
          the form and display it.
          <br/>
          Compare the script on the server to the HTML source displayed in the browser. Can you see what processing is done on the server and what is done on the client?
          </div>
        </div>
        <div class="span9">
        
			<h2>Client information</h2>
			
            <p>What are the inner dimensions of this browser window?</p>
                    
            <!-- Let's use some Javascript ON THE CLIENT to find out the window size that the browser is set to
                 you can resize your browser window to see this change (refresh the page) -->
            <p>Javascript says: 
            <script>
                document.write(window.innerHeight + " x " +window.innerWidth);
            </script>
            </p>
        
            <!-- Now we'll create a form with hidden fields to hold values for width and height -->    
            <form action="JavascriptToPHP.php" name="hiddenForm" method="POST">
                <input type="hidden" id="width1" name="width" value="unknown" />
                <input type="hidden" id="height1"name="height" value="unknown" />
                <input type="submit" value="Update" />
            </form>
            <!-- this javascript sets the values of the width and height fields in the hidden form -->
            <script>
                document.getElementById('width1').value = window.innerWidth;
                document.getElementById('height1').value = window.innerHeight;

            </script>
            
            
            <!-- ON THE SERVER we'll use some PHP to extract the width and height from the submitted form and display them -->
            <p>PHP says: 
            <?php
            
                echo ($_POST["height"] . " x " . $_POST["width"]);
            
            
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
