<?php

// Define a function to convert a temperature from Fahrenheit to Celsius.
// This function uses the formula (Fahrenheit - 32) * 5/9
// The resulting temperature is rounded to one decimal place for precision.
function fahrenheitToCelsius($Fahrenheit) {
    return ($Fahrenheit - 32) * 5/9;
}
// Sample usage - do not modify
echo(number_format(fahrenheitToCelsius(21), 1)); // "-6,1"


