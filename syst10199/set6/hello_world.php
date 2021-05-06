<!DOCTYPE html>
<html lang="en">
<head>
	<title>PHP Hello World</title>
	<meta charset="utf-8">
</head>
<body>

<?php
/*
  Author: Your Instructor
  File name: hello_world.php
  Date created: Summer 2018
  Date created: Summer 2020
  Description: 
	- example of hybrid PHP to demonstrate how and where php code can be placed 
	  inside HTML code 
	- all code outside the start and stop processing instructions is ignored
	  by the PHP intepreter
	- all code inside will be processed by the PHP interpreter and replaced
	  by the results of the processing
*/

// declare and initialize variable $txt to store the value Hello World
$txt = "Hello world!";

// display the stored value in variable $txt in the <body> element
echo "<p>" . $txt  . "</p>";
?>

</body>
</html>
