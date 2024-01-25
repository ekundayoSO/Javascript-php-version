<?php

/*
Create a program getTemperature that asks the user to input a temperature in Celsius and then outputs whether they should wear a jacket (if the temperature is below 15°C) or not.
 */function getTemperature($Number) {
        if ($Number < 15) {
            return "Wear jacket";
        } else {
            return "Don\'t wear jacket";
        }
 }

 getTemperature(Number(prompt('What is the current temperature?')));


