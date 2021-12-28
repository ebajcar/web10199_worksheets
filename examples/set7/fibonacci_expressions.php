<!DOCTYPE html>
<html>
<head>
<!--
Gist id : 78a00b232fea50fd921df5f69653c33b
Code description : funky fibonacci numbers

Get the code description - http://phpfiddle.org/api/raw/78a00b232fea50fd921df5f69653c33b/description
Get the raw code - http://phpfiddle.org/api/raw/78a00b232fea50fd921df5f69653c33b
-->
	<title>fibonacci Sequence</title>
	<link rel="stylesheet" href="common.css" />
	<style>
		th {
			text-align: left;
			background-color: #aaa;
		}
		th, td {
			padding: 0.2em;
			
		}
		tr.alt td {
			background: #ddd;
		}
		table {
			margin: 0px;
			width: 20em;
			border: 1px solid #666;
		}
	</style>
</head>
<body>

	<a href="https://gist.github.com/ebajcar/6807c7b57782ad87da33bfecaa97ae9c">Funky Fibonacci numbers on github.com</a>
	<h2>Fibonacci sequence</h2>
	<table>
		<tr id="tr1">
			<th>Sequence #</th>
			<th>Value</th>
		</tr>
		<tr id="tr2">
			<td>F<sub>0</sub></td>
			<td>0</td>
		</tr>
		<tr id="tr3" class="alt">
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
?>
		<tr <?php if ( $i % 2 != 0 ) echo 'class="alt" ' ?>>
			<td>F<sub><?= $i ?></sub></td>
			<td><?= $num2 ?></td>
		</tr>
<?php
}
?>	
</body>
</html>
