<?php

    /*
     * This example show you how to use an array to store personal messages.
     * the array is a combination of keys and corresponding values
     *
     *  key => value
     *
     * In this example the key is a name and the value is a personal message
     *
     * The echo statement is used to print out a personal message - notice how the $person variable
     * is used as the key to lookup the value in the $messages array.
     *
     */
    
    $messages = array (
        "Charlie" => "Hello Charlie" ,
        "Jordan"  => "Watcha Mate" ,
        "Nathan"  => "Hiya Nathan"    
        
        );
        
    $person = "Jordan";    

    echo ("<P> A personal message for " . $person .  ": " . $messages["Jordan"]); 


?>