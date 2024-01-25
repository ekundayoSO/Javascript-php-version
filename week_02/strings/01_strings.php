<?php

/**
Refine the function getCharCount so that it returns the count of characters present in the str parameter it receives.
 */

 function getCharCount($str) {
    return strlen($str);
 }

 // Sample usage - do not modify
 echo(getCharCount('Sam')) . "\n"; // 3
 echo(getCharCount('Alex 123')) . "\n"; // 8
 echo(getCharCount('Charley is here')); // 15
 