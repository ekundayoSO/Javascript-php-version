<?php

/**
Refine the shoutMyName function to return the name parameter it receives, converted entirely to uppercase.
 */

 function shoutMyName($name) {
    return strtoupper($name);
 }

 // Sample usage - do not modify
 echo(shoutMyName('Sam')) . "\n"; // "SAM"
 echo(shoutMyName('Charley')) . "\n"; // "CHARLEY"
 echo(shoutMyName('alex')) . "\n"; // "ALEX"
 