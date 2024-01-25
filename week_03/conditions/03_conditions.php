<?php

/**
Complete the function evenOrOdd such that it returns the string "even" when the number parameter it receives is even and "odd" otherwise.
 */

 /*
 function evenOrOdd($number) {
    if ($number % 2 !== 0) {
        return "odd";
    } else {
        return "even";
    }
 }
 */

 function evenOrOdd($number) {
    if ($number % 2 === 0) {
        return "even";
    } else {
        return "odd";
    }
 }



 // Sample usage - do not modify
 echo(evenOrOdd(25)) . "\n"; // "odd"
 echo(evenOrOdd(18)) . "\n"; // "even"
 echo(evenOrOdd(-17)); // "odd"
 