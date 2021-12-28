<?php
/* 
PHP array_rand() Function
https://www.w3schools.com/php/func_array_rand.asp

Definition and Usage
The array_rand() function returns a random key from an array, or it returns an array of random keys if you specify that the function should return more than one key.

Syntax
array_rand(array,number)

Parameter	Description
array	Required. Specifies an array
number	Optional. Specifies how many random keys to return

Technical Details
Return Value:	Returns a random key from an array, or an array of random keys if you specify that the function should return more than one key
PHP Version:	4+
Changelog:	As of PHP 5.2.10, the resulting array of keys is no longer shuffled
As of PHP 4.2.0, the random number generator is seeded automatically

*/
$a = array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];

// Return a random key from an array:
echo "<p>Return a random key from an array:</p>";
$a = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
print_r(array_rand($a,1));

//Return an array of random string keys:
echo "<p>Return an array of random string keys:</p>";
$a = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
print_r(array_rand($a,2));
?>
