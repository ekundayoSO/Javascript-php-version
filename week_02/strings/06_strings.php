<?php

/**
Refine the skipFirstCharacter function to return a string containing all characters from the text parameter, excluding the first character.

 */
function skipFirstCharacter($text) {
    return substr($text, 1);
}

// Sample usage - do not modify
echo(skipFirstCharacter('Xcode')) . "\n"; // "code"
echo(skipFirstCharacter('Hello')); // "ello"
