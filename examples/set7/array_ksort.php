<!DOCTYPE html>
<html lang="en">
<head>
	<title>PHP ksort</title>
	<meta charset="utf-8">
</head>
<body>

<?php
/*
  Author: Your Instructor
  File name: array_ksort.php
  Date created: Summer 2020
  Description: 
  
ksort() sorts on key
asort() sorts on value

www.php.net/manual/en/array.sorting.php
*/
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

foreach($age as $x => $x_value) {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
}
?>

</body>
</html>
