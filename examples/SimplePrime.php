<!DOCTYPE html>
<html>
<head>
    <title>Example: Prime numbers</title>
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
