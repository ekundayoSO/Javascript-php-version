<?php

/**
Refine the concatInitials function to return a string that combines the firstNameInitial followed by the lastNameInitial.
 */

 function concatInitials($firstNameInitial, $lastNameInitial) {
    return $firstNameInitial . $lastNameInitial;
 }

 // Sample usage - do not modify
 echo(concatInitials('J', 'D')) . "\n"; // "JD"
 echo(concatInitials('S', 'B')); // "SB"
 