<?php
// https://www.php.net/manual/en/function.count.php
echo "<br>a ";
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
var_dump(count($a));
echo "<br> ";
var_dump($a);

echo "<br>b "; 
$b[0]  = 7;
$b[5]  = 9;
$b[10] = 11;
$b[20] = 21;
var_dump(count($b));
echo "<br> ";
var_dump($b);

echo "<br>\$c all members: "; 
$c[0] = array(2,3);
$c[1] = array(4,5,6);
var_dump(count($c,1));  // 7
// If the optional mode parameter is set to COUNT_RECURSIVE (or 1), count() will recursively count the array. This is particularly useful for counting all the elements of a multidimensional array.
echo "<br>\$c ";
echo "<pre>"; 
var_dump($c);
echo "</pre>";

echo "<br>\$c first member count:  ";
var_dump(count($c[0],1));
echo "<br>\$c second member count:  ";
var_dump(count($c[1],1));

echo "<br>d "; 
$d = "Hello World!";
var_dump(count($d));

echo "<br>null ";
var_dump(count(null));

echo "<br>false ";
var_dump(count(false));

echo "<br>a ";
$a = array_fill(5, 6, 'banana');
$b = array_fill(-2, 4, 'pear');
print_r($a);

echo "<br>b ";
print_r($b);

echo "<br>echo session ";
$_SESSION['one'] = "one";
$_SESSION['home'] = "where the heart is";
$_SESSION['color'] = 123123;
echo $_SESSION;

echo "<br>print_r session ";
print_r($_SESSION);
$index = 34;
echo "<br>index ";
echo $GLOBALS[index];

?>
