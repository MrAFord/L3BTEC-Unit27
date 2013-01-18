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

    

    <?php
    
        // a crude and slow but simple way to calculate if a number is prime
        
        $maxnumber = 200;
        
        for($i=2;$i<$maxnumber+1;$i++) {    // loop through each number upto $maxnumber
            
            $prime = true;                  // start by assuming the number is prime...
            
            for($j=2;$j<$i;$j++) {          // loop through all numbers slower than this number...
                if($i % $j == 0)   {        // if it can be divided then it isn't prime
                    $prime=false;
                    break;                  // no need to test any more, so break out of the loop
                }
            }
            
            // Challenge: if we only need to check divisors up to the square root of
            //      $i how could we speed up the loop that is testing $i % $j == 0
            
            
            // now we check if the prime flag is still true, if it is then
            // we can print that the number $i is prime
            if($prime==true) {
                echo $i . " is a prime number<br/>";
            }
            
            
        }
            
            
	?>
		
		
        
    
    </body>
</html>
