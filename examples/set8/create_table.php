<!DOCTYPE html>
<html>
<head>
    <title>OO PHP class example</title>
    <meta charset="utf-8">
<style>
table {
    border: solid 1px black;
}
.cell {
    width: 150px; 
    border: 1px solid black;    
}
</style>
</head>
<body>

<?php
class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td class='cell'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

// input
$customers = array(
                array("id"=>"1",
                  "Firstname"=>"Cathy",
                  "Lastname"=>"Jones"
                ),
                array("id"=>"2",
                  "Firstname"=>"Charlie",
                  "Lastname"=>"Smith"
                ),                
                array("id"=>"3",
                  "Firstname"=>"Linus",
                  "Lastname"=>"Torvalds"
                ),
                array("id"=>"4",
                  "Firstname"=>"Sean",
                  "Lastname"=>"Smith"
                ),                                  
             ) ;

// output
echo <<<START
<table>
  <tr>
    <th>Id</th>
    <th>Firstname</th>
    <th>Lastname</th>
  </tr>
START;           
foreach(new TableRows(new RecursiveArrayIterator($customers)) as $k=>$v) {
    echo $v;
}
echo "</table>";
?>

</body>
</html>
