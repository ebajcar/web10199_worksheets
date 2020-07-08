<!DOCTYPE html>
<html lang="en">
<head>
	<title>explore printf, sprintf, call_user_func_array</title>
	<meta charset="utf-8">
</head>
<body>

<?php
# explore printf, sprintf, call_user_func_array
$s = 'monkey';
$t = 'many monkeys';
echo "<pre>";
printf("[%s]\n",      $s); // standard string output
printf("[%10s]\n",    $s); // right-justification with spaces
printf("[%-10s]\n",   $s); // left-justification with spaces
printf("[%010s]\n",   $s); // zero-padding works on strings too
printf("[%'#10s]\n",  $s); // use the custom padding character '#'
printf("[%10.10s]\n", $t); // left-justification but with a cutoff of 10 characters
echo "";

echo sprintf ("|%+4d|%+4d|\n",   1, -1);
echo sprintf ("|%-4d|%-4d|\n",   1, -1);
echo sprintf ("|%+-4d|%+-4d|\n", 1, -1);
echo "</pre>";

function printf_array($format, $arr) 
{ 
    return call_user_func_array('printf', array_merge((array)$format, $arr)); 
} 

$goodevil = array('good', 'evil'); 
printf_array('There is a difference between %s and %s', $goodevil); 
echo "<br>";

$numbers = array('one', 'two', 'three', 'four', 'five', 'six', '7', '8');
printf_array('Counting %s and %s and %s and %s and %s', $numbers);
?>

</body>
</html>
