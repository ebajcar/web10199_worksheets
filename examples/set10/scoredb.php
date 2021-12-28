<!DOCTYPE html>
<html lang="en">
<head>
<title>Scores</title>
<meta charset="utf-9">
<style>
section, h1 {
	border: 0px;
	text-align: center;
	padding: 5px;
	margin: auto,
}
table, tr, td {
	text-align: center;
	margin: auto;
	width: 500px;
	border: 1px solid red;
	background-color: #eeeeee;
}
label {
	display: block;
}
.back {
	font-size:14px;
	background-color: white;
	border:1px gray solid;
	padding: 5px 10px;
	border-radius:5px;
	box-shadow: 1px 1px 1px darkgray;	
}
</style>
</head>
<body>
<?php
// button to reload the HTML page
echo '<a class="back" href="scoredb.html" target="_top">BACK</a><br><br>';

$error = "Sorry you must submit a player and a score";
//COLLECT VARIABLES FROM HTML
if (isset($_POST['player'])) {
	$player = $_POST['player'];
} else {
	echo $error;  return;
}
if (isset($_POST['score'])) {
	$score = $_POST['score'];
} else {
	echo $error;  return;
}
//echo "$player score = $score";
$date = date("Y-m-d");
$error = 0;

require_once('dbinfo.php');
//OPEN DATABASE
//select table, use your username and password
// "localhost" assuming the php and database are on the same server
// http://localhost/phpmyadmin/index.php for xampp
try {
	$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $USRID, $PASSWD);
	// set the PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "<br>Could not connect " . $e->getMessage();
}
//INPUT TO MYSQL
$command = "INSERT INTO scores ( player, score, date ) VALUES ( '$player','$score','$date')";
// prepare the statement for execution
$stmt = $dbh -> prepare($command);
if ( !$stmt->execute() ) {
  $error = "Sorry could not record score";  echo $error;  return;
}
?>
	
<?php	
	//OUTPUT TO HTML
	// prepare statement, select all columns for a given player
	$query = "SELECT * FROM scores WHERE player='$player' ORDER BY score DESC";
	// result variable holds the entire dataset returned 
	$result  = $dbh -> prepare($query);
	if ( $result->execute() ) {
		echo '<table>
		<tr><th>SCORE</th><th>DATE</th></tr>';
		$tally = 0;
		$total = 0;
		while ($myrow = $result->fetch()) {
			$tally = $tally + $myrow['score'];
			$total = $total + 1;
			echo "<tr>
					<td>".$myrow['score']."</td>
					<td>".$myrow['date']."</td>
				  </tr>\n";
		}
		$ave = $tally / $total;
		echo "</table> <p>total =".$tally."&nbsp;&nbsp;   average =".$ave."</p>";
	} else {
		$error = "Sorry could not retrieve scores";  echo $error;  return;
	}
	$dbh = null;
	exit;
?>
</body>
</html>
