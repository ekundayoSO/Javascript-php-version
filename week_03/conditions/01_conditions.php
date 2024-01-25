<?php

/**
Implement the function canVote such that it returns true whenever the age 18 or above and false in all other scenarios.
*/

function canVote($age) {
    if ($age >= 18) {
        return "true";
    } else {
        return "false";
    }
}

// Sample usage - do not modify
echo(canVote(25)) . "\n"; // true
echo(canVote(18)) . "\n"; // true
echo(canVote(10)); // false
