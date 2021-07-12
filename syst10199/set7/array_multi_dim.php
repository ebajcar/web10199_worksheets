<?php 
/*
Author: Ellen Bajcar
Program: array_multidimensional.php
Copyright: 
    This work is the intellectual property of Sheridan College. 
    Any further copying and distribution outside of class must be within 
    the copyright law. Posting to commercial sites for profit is prohibited.
*/
$a = array( 
    'apple' => 'apple', 
    'b' => 'banana', 
    'c' => array ('x', 'y', 'z'), 
    'd' => array (2,3,"a" => array(44,55,66), "b")); 
   
print_r ($a); 

echo "<br><br>"; 
echo "<pre>"; 
var_dump ($a); 
echo "</pre>";
?>
