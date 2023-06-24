<!DOCTYPE html>
<html>
<body>

<?php
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
?> 

</body>
</html>
