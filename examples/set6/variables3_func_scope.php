<!DOCTYPE html>
<html>
<body>

<?php
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

?> 

</body>
</html>
