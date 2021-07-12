<?php
/* 
Author: Ellen Bajcar
Program: circle_area.php
Copyright: 
    This work is the intellectual property of Sheridan College. 
    Any further copying and distribution outside of class must be within 
    the copyright law. Posting to commercial sites for profit is prohibited.

This is an example of a simple script to calculate the properties 
of a circle. the script is saved on the server named circle.php

How it works
--The script stores the radius of the circle to test in a $radius variable.
--Then it calculates the diameter, and stores it in a $diameter variable.
--Next it calculates the circumference and stores the result in $circumference variable. It uses the built-in PHP constant M_PI which stores the value of pi.
--then it calculates the circle's area and stores it in $area variable.
Using the function "echo" the script outputs the results using the string 
operator (.) to join string together.

Source:  library.books24x7.com, bookid 338388

Link id : tuy8-vc3w
Code description : calculate properties of a circle and other tidbits
Get the code description - http://phpfiddle.org/api/raw/tuy8-vc3w/description
*/

$radius = 4;
$diameter = $radius * 2;
$circumference = M_PI * $diameter;
$area = M_PI * pow($radius, 2);

print "this circle has ... <br />";
print "A radius of " . $radius . " <br />";
print "A diameter of " . $diameter . " <br />";

echo "A circumference of " . $circumference . "<br />";
echo "An area of " . $area . " <br /> ";

printf("A diameter of %5.2f .<br>",    $radius);
printf("[%20.5f]\n",    $circumference);

?>
