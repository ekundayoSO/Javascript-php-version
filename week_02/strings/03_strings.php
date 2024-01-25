<?php

/**
Refine the lowerName function to return the name parameter it receives, entirely in lowercase.

 */
function lowerName($name) {
    return strtolower($name);
}

// Sample usage - do not modify
echo(lowerName('Sam')) . "\n"; // "sam"
echo(lowerName('ALEX')); // "alex"
