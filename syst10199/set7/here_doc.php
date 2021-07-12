<?php 

// Print what was submitted in the form parameter called 'user' 
// First checks if the parameter exists (could be empty)
if (isset($_POST["user"]))
	print $_POST['user']; 

// Unset the parameter; unset() destroys the specified variables
unset($_POST['user']);
print "!";

print <<<TAG1
<!DOCTYPE html>
<html>
<head>
	<title>here doc and \$_SERVER</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post" action="$_SERVER[PHP_SELF]">
	Your Name: <input type="text" name="user">
	<br>
	<input type="submit" value ="Say Hello">
	<br>
	</form>
</body>
</html>
TAG1;

/*
action="$_SERVER[PHP_SELF]"

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)
$_SERVER — Server and execution environment information
$_SERVER is an array containing information such as headers, paths, and script locations. The entries in this array are created by the web server.

'PHP_SELF'
The filename of the currently executing script, relative to the document root.

See Manual https://www.php.net/manual/en/reserved.variables.server.php
*/
?>
