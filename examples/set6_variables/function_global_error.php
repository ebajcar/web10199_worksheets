<?php
// generates error
$one = 5;
$two = 7;
function sum() {
    $together = global $one + global $two;
    return $together;
}
$newone = sum();
echo $newone;


/*
https://www.php.net/manual/en/language.variables.scope.php

$one = 5;
$two = 7;
function sum() {
	global $one, $two;
    $together = $one + $two;
    return $together;
}
$newone = sum();
echo $newone; 

*/
?>
