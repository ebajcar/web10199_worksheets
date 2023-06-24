<!DOCTYPE html>
<html>
<body>

<?php
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

echo "<p>Then, each time the function is called, that variable will still have the information it contained from the last time the function was called. Note: The variable is still local to the function.</p>";


?> 

</body>
</html>
