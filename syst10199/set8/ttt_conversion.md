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
// current player
var player = "X"; 
//array (HTML collection) of 9 objects  
var board = document.getElementsByTagName("td"); 
//all winning combinations, 3 rows, 3 columns, 2 diagonals
var winSets = [ [0,1,2],[3,4,5],[6,7,8], [0,3,6],[1,4,7],[2,5,8], [0,4,8],[2,4,6] ]; 
// number of available (empty) cells
var empty = 9; 
// game not in session (false if in process)
var gameover = false; 
```

In PHP, we need to keep track of the same data, using PHP, in this version, we use an associative array:
```php
$game = array(
  // current player
  "who" => 0,
  // representation of the board
  "board" => "222222222",
  // do we have a winner and who is it?
  "win" => -1,
  // character representation, symbol, of the players
  "playToken" => "XOT",
  // game over or in session
  "endGame" => -1,
  // which cell was selected (clicked) by the current player
  "clicked" => 9
);
// possible winning combinations, using the same index values as the HTML collection in JS version
$winCombo = array("012","345","678","036","147","258","840","246");

// string to construct an updated version of the board with HTML
$output = "";

// string to display whose turn it is
$outwho = "";

// string to display who won or a draw
$message = "";
```


