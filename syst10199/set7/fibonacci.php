<!DOCTYPE html>
<html lang="en">
<head>
	<title>fibonacci Sequence</title>
	<style>
		th {
			text-align: left;
			background-color: #aaa;
		}
		th, td {
			padding: 0.2em;
			
		}
		tr:nth-child(even) td {
			background-color: lightblue;
		}
		table {
			margin: 0px;
			width: 20em;
			border: 1px solid #666;
		}
	</style>
</head>
<body>
	<h2>Fibonacci sequence</h2>
	<table>
		<tr>
			<th>Sequence #</th>
			<th>Value</th>
		</tr>
		<tr>
			<td>F<sub>0</sub></td>
			<td>0</td>
		</tr>
		<tr>
			<td>F<sub>1</sub></td>
			<td>1</td>
		</tr>
<?php
$iterations = 10;
$num1 = 0;
$num2 = 1;
for ($i=2; $i <= $iterations; $i++ ) {
	$sum = $num1 + $num2;
	$num1 = $num2;
	$num2 = $sum;
    echo "
		<tr>
			<td>F<sub>". $i."</sub></td>
			<td>".$num2."</td>
		</tr>
    ";
}
?>	
</body>
</html>
