# Converting JS code to PHP code (functional paradigm)

The php version of tic tac toe [ttt_2020_2.php](ttt_2020_2.php) is a functional coding approach (though there are some global variables)
- using pure PHP (everything in the file is PHP code and we produce HTML with PHP echo function)
- need to use GET (or POST) method to pass data to the PHP environment for processing on EVERY CLICK (replaces the event-driven aspect of JS)
- need to use SESSIONS to keep the state of the variables from HTTP request to HTTP request (web pages are stateless)
- need to choose a different representation of the board (no access to the DOM, therefore no HTML collection of td's)

## functions

**function play()**
is the main function that calls functions
- updateBoard()
- displayBoard()
- updateSEssion()

**function displayBoard()**
calls functions
- checkWinner()
- displayResults()

## Variables

In Javascript, we used
```js
    var player = "X"; // current player
    var board = document.getElementsByTagName("td"); //array (collection) of 9 objects  
    var winSets = [ [0,1,2],[3,4,5],[6,7,8], [0,3,6],[1,4,7],[2,5,8], [0,4,8],[2,4,6]	]; //all winning combinations, 3 rows, 3 columns, 2 diagonals
    var empty = 9; // number of available (empty) cells
    var gameover = false; // game not in session (false if in process)
```

In PHP, we need to keep track of the same data, using PHP, in this version, we use an associative array:
```php
	$game = array(
		"who" => 0,
		"board" => "222222222",
		"win" => -1,
		"playToken" => "XOT",
		"endGame" => -1,
		"clicked" => 9
	);
```
