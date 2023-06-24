<!DOCTYPE html>
<html>
<body>

<?php
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

?> 

</body>
</html>
