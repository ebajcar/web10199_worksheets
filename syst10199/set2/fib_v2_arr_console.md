<!DOCTYPE html>
<html>
<head>
	<title>Fibbonaci Numbers Added To Array</title>
	<meta charset="utf-8">
</head>
<body>
	<header>
		<h1>Fibbonaci Numbers Added To Array</h1>
	</header>
<script>
// Calculate and display in console the first 5 Fibbonaci numbers

// properties and methods available for arrays
// https://www.w3schools.com/jsref/jsref_obj_array.asp
var values = [];
var n = 10;
var pre = 0, cur = 1;
//console.log(pre); 
values.push(pre);
//console.log(cur); 
values.push(cur);
// explore the while loop
var i = 0;
while (i < n-2) {
	var tmp = pre;
	pre = cur;
	cur += tmp;
    //console.log(cur);
	values.push(cur);	
	i++;
}
console.table(values);
// https://www.w3schools.com/jsref/obj_console.asp
</script>
</body>
</html>
