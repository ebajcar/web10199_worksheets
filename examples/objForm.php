<?php
/*
using external files include() and require() functions

PHP has four functions for using external files: include(), include_once(), require(), and require_once().
include files give you a way to create one version of the common elements of your web site, such as the header, footer, menu, etc., which you then reference on all web pages.

The main difference:
include() function will print a warning on error but will continue to process the script.
require() function will print an error and halt the processing of the script.
otherwise, both functions work exactly the same when script is working properly.

Both functions also have a _once version. This ensures that the external file is only included once regardless of how many times the script may inadvertently try to include it.
*/
require_once("Form.class");
$myTitle = "My New Form";
echo "<html><head><title>$myTitle</title>
<link href='css/file.css' ></head>
<body>";
$phone_form = new Form("objForm.php", "Submit Phone");
$phone_form->addField("firstName", "First Name");
$phone_form->addField("lastName", "Last Name");
$phone_form->addField("street", "Address");
$phone_form->addField("city", "City");
$phone_form->addField("postal", "Postal Code");

$phone_form->addField("url", "url");
echo "<h3>Please fill out the following form:</h3>";
$phone_form->displayForm();
echo "</body></html>"
 ?>
