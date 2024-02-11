<?php
// https://www.php.net/manual/en/classobj.examples.php


// base class with member properties and methods
class Vegetable {
   var $edible;
   var $color;
   function __construct($edible, $color="green")
   {
       $this->edible = $edible;
       $this->color = $color;
   }
   function is_edible()
   {
       return $this->edible;
   }
   function what_color()
   {
       return $this->color;
   }
} // end of class Vegetable


// extends the base class
class Spinach extends Vegetable {
   var $cooked = false;
   function __construct()
   {
       parent::__construct(true, "green");
   }
   function cook_it()
   {
       $this->cooked = true;
   }
   function is_cooked()
   {
       return $this->cooked;
   }
} // end of class Spinach

// instantiate 2 objects

$veggie = new Vegetable(true, "blue");
$leafy = new Spinach();

// print out information about objects
echo "<p>veggie: CLASS " . get_class($veggie) . "</p>";
echo "<p>leafy: CLASS " . get_class($leafy);
echo ", PARENT " . get_parent_class($leafy) . "</p>";
?>
