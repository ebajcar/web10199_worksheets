<?php
/*
  try...catch 
  Exception object
  getMessage() method
  print (single string) vs. echo (multiple strings)
  line 15 will generate an error which is caught in the
    error_log; because print takes only one argument
*/
function add($x, $y){
    return $z = $x + $y;
    }
    echo add(2,4);
    $hello = "hello world";
    
 $m = 5; $n = 8; $o = 8;    
try {    
  print $m, $n, $o; //will generate error_log
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>
