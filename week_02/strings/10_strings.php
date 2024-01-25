<?php

/**
Refine the capitalize function to ensure it capitalizes the first letter of the name parameter provided to it.
 */

 function capitalize($word) {
    #return strtoupper(substr($word, 0, 1)) . substr($word, 1);
    return strtoupper(substr($word, 0, 1)) . strtolower(substr($word, 1));
 }

 // Sample usage - do not modify
 echo(capitalize('sam')) . "\n"; // "Sam"
 echo(capitalize('ALEX')) . "\n"; // "Alex"
 echo(capitalize('chARLie')); // "Charlie"
 