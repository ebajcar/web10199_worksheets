<?php

$capital = array(
"NL" => "St.John's", 
"PE" => "Charlottetown", 
"NB" => "Fredericton", 
"NS" => "Halifax", 
"QC" => "Quebec City",
"ON" => "Toronto",
"MB" => "Winnipeg",
"SK" => "Regina",
"AB" => "Edmonton",
"BC" => "Victoria",
"NT" => "Yellowknife",
"YT" => "Whitehorse",
"NU" => "Iqaluit" );

foreach($capital as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

$province = array(
"NL" => "Newfoundland and Labrador", 
"PE" => "Prince Edward Island", 
"NB" => "New Brunswick", 
"NS" => "Nova Scotia", 
"QC" => "Quebec",
"ON" => "Ontario",
"MB" => "Manitoba",
"SK" => "Saskatchewan",
"AB" => "Alberta",
"BC" => "British Comumbia",
"NT" => "Northwest Territories",
"YT" => "Yukon Territories",
"NU" => "Nunavut" );
ksort($province);
echo "<p><b>Sorted content of the array \$province is combined with the capital name from \$capital array (common field, common key value):</b> </p>";
foreach($province as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value . " &mdash; capital is " . $capital[$x];
    echo "<br>";
}

foreach($province as $x => $x_value) {
    echo "On a mail label>>  ". $capital[$x] . ", " . $x_value;
    echo "<br>";
}
?>
