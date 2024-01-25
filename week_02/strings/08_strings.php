<?php

/**
Refine the sayHello function so that it incorporates the tempname variable into a greeting string, forming 'Hello name'.

 */
function sayHello($name) {
    return "Hello" . ' ' . $name;
}

// Sample usage - do not modify
echo(sayHello('Alex')) . "\n"; // "Hello Alex"
echo(sayHello('Sam')); // "Hello Sam"
