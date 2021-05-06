<html lang="en">
<head>
	<title>PHP 5 Variables </title>
	<meta charset="utf-8">
</head>
<body>

<?php
/* 
from w3schools.com
   
PHP 5 Variables 
Variables are "containers" for storing information.

Creating (Declaring) PHP Variables
In PHP, a variable starts with the $ sign, followed by the name of the variable:
*/

$txt = "Hello world!";
$x = 5;
$y = 10.5;
// After the execution of the statements above, the variable $txt will hold the value Hello world!, the variable $x will hold the value 5, and the variable $y will hold the value 10.5.


/*
PHP Variables
A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).

Rules for PHP variables:
A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables)

Output Variables
The PHP echo statement is often used to output data to the screen.
*/

// The following example will show how to output text and a variable:
$txt = "Sheridan College";
echo "I love $txt!";

// The following example will produce the same output as the example above:
$txt = "W3Schools.com";
echo "I love " . $txt . "!";

// The following example will output the sum of two variables:
echo "<p>The following example will output the sum of two variables:</p>";
$x = 5;
$y = 4;
echo $x + $y;


/*
PHP is a Loosely Typed Language; we do not have to tell PHP which data type the variable is.
PHP automatically converts the variable to the correct data type, depending on its value.

PHP Variables Scope
In PHP, variables can be declared anywhere in the script.

The scope of a variable is the part of the script where the variable can be referenced/used.
PHP has three different variable scopes: local, global, static
*/


// A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:
$x = 5; // global scope
function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function myTest is: $x</p>";
} 
myTest();
echo "<p>Variable x outside function myTest is: $x</p>";


// A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:
function myTest2() {
    $x = 6; // local scope
    echo "<p>Variable x inside function myTest2 is: $x</p>";
} 
myTest2();
// using x outside the function will generate an error
echo "<p>Variable x outside function myTest2 is: $x</p>";


//The global keyword is used to access a global variable from within a function.
//To do this, use the global keyword before the variables (inside the function):
$x = 5;
$y = 10;
function myTest3() {
    global $x, $y;
    $y = $x + $y;
}
myTest3();
echo $y; // outputs 15

echo "<br>";
// PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly. The example above can be rewritten like this:
$x = 5;
$y = 10;
function myTest4() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 
myTest4();
echo $y; // outputs 15

echo "<p>Using the static keyword</p>";
// Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job. To do this, use the static keyword when you first declare the variable:
function myTest5() {
    static $x = 0;
    echo $x;
    $x++;
}
myTest5(); echo "<br>";
myTest5(); echo "<br>";
myTest5(); echo "<br>";
myTest5(); echo "<br>";
// Then, each time the function is called, that variable will still have the information it contained from the last time the function was called. Note: The variable is still local to the function.
?>


</body>
</html>
