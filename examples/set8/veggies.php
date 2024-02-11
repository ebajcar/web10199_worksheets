<?php
// https://www.php.net/manual/en/classobj.examples.php

// base class with member properties and methods
require_once("Vegetable.class");

// extends the base class
require_once("Spinach.class");

// instantiate 2 objects

$veggie = new Vegetable(true, "blue");
$leafy = new Spinach();

// print out information about objects
echo "<p>veggie: CLASS " . get_class($veggie) . "</p>";
echo "<p>leafy: CLASS " . get_class($leafy);
echo ", PARENT " . get_parent_class($leafy) . "</p>";
?>
