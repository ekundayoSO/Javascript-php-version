<?php

/**
Refine the getFullName function so that it returns the person's full name by utilizing string interpolation.
 */

 function getFullName($firstName, $lastName) {
    return $firstName . ' ' . $lastName;
 }

 // Sample usage - do not modify
 echo(getFullName('Sam', 'Doe')) . "\n"; // "Sam Doe"
 echo(getFullName('Alex', 'Blue')); // "Alex Blue"
 