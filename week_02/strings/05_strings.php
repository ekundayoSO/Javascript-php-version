<?php

/**
Refine the getLastCharacter function so that it returns the last character from the name parameter it receives.
 */

 function getLastCharacter($name) {
    return $name[strlen($name) - 1];
 }

 // Sample usage - do not modify
 echo(getLastCharacter('Sam')) . "\n"; // "m"
 echo(getLastCharacter('Alex')) . "\n"; // "x"
 echo(getLastCharacter('Charley')); // "y"
 