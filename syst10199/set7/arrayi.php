<?php

//indexed array
$cities = array( "St.John's", "Charlottetown", "Fredericton", "Halifax", "Quebec City", "Toronto", "Winnipeg", "Regina", "Edmonton", "Victoria", "Yellowknife", "Whitehorse", "Iqaluit" );

//length of the array = number of elements, index starts at 0
$arrlength = count($cities);

//display each value in the array using the index and length of the array
echo "<b>Content of the array \$cities is:</b> <br>";
for($x = 0; $x < $arrlength; $x++) {
    echo $cities[$x];
    echo "<br>";
}

//display all values in the array , sorted alphabetically
echo "<b>Sorted content of the array \$cities is:</b> <br>";
sort($cities);
for($x = 0; $x < $arrlength; $x++) {
    echo $cities[$x];
    echo "<br>";
}
?>
