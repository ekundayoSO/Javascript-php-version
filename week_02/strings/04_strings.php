<?php

/**
Refine the getFirstCharacter function to return the first character of the name parameter provided to it.
 */

 function getFirstCharacter($name) {
    return $name[0];
 }

 // Sample usage - do not modify
 echo(getFirstCharacter('Amsterdam')) . "\n"; // "A"
 echo(getFirstCharacter('Japan')); // "J"
 