<!DOCTYPE html>
<html>
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
echo("<p>".$txt."</p>");  // output: Hello world!
echo("<p>".$x."</p>");   // output: 5
echo("<pre>".var_dump($y)."</pre>");  // output: float(10.5)
?> 

</body>
</html>
