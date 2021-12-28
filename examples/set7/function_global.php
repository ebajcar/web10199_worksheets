<?php
$one = 5;
$two = 7;
function sum() {
    $together = global $one + global $two;
    return $together;
}
$newone = sum();
echo $newone;
?>
