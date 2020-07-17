<?php 
session_start(); 
//TODO: don't forget to validate html after page is rendered (View page source)
echo '<!DOCTYPE html>
	  <html lang="en">
	  <head>
		<title>TicTacToe</title>
		<meta charset="utf-8">
	  <style>
	  body {
		text-align: center;  
		width: 300px;
		margin: auto;
	  }
	  table {
		  width:100px;
		  margin:auto;
	  }
	  td {
		  width: 33px;
		  height: 33px;
		  text-align: center;
		  background: lightblue;
	  }
	  input {
		  display: block;
		  width: 100%;
		  height: 100%;
		  margin: 0;
		  padding: 0;
		  border: none;
	  }
	  </style>
	  </head>
	  <body>
		<h1>Play Tic Tac Toe!</h1>
		<form method="GET" action="ttt_2020_2.php">
			<p><input type="submit" name="reset" value="Start A New Game"></p>
		</form>		
';

if(isset($_GET['reset'])) { 
	session_unset();
	$game = array(
		"who" => 0,
		"board" => "222222222",
		"win" => -1,
		"playToken" => "XOT",
		"endGame" => -1,
		"clicked" => 9
	);	
} else {	
	isset($_GET['curCell']) 
    ? $game["clicked"] = $_GET['curCell'] 
    : $game["clicked"] = 9;	
	isset($_SESSION['who']) 
    ? $game["who"] = $_SESSION['who'] 
    : $game["who"] = 0;
	isset($_SESSION['board']) 
    ? $game["board"] = $_SESSION['board'] 
    : $game["board"] = "222222222";
	isset($_SESSION['win']) 
    ? $game["win"] = $_SESSION['win'] 
    : $game["win"] = -1;
	isset($_SESSION['playToken']) 
    ? $game["playToken"] = $_SESSION['playToken'] 
    : $game["playToken"] = "XOT";
	isset($_SESSION['endGame']) 
    ? $game["endGame"] = $_SESSION['win'] 
    : $game["endGame"] = -1;
}
play($game);

//	update session variables so we can access it next time with current game info...
function updateSession() {
	global $game;
	$_SESSION['board'] = $game["board"];
	$_SESSION['who'] = $game["who"];
	$_SESSION['win'] = $game["win"];
	$_SESSION['playToken'] = $game["playToken"];
	$_SESSION['endGame'] = $game["endGame"]; 
  var_dump($_SESSION);
}
	
//	game is not over, prepare board for this turn, check winner, update session variables		
function play($game) {	
  $output = "";
  $outwho = "";
  $message = "";
	if($game["endGame"] == -1) {
		if ($game["clicked"] !== 9 )
			$outwho = updateBoard($output, $outwho); //print_r($game); 
		  $output = displayBoard($output, $outwho);		
		  updateSession();		
	} 
} 

// identify which cell was clicked and update game state
function updateBoard($output, $outwho) {
	global $game;
		$data = $game['clicked']; //identify which button was submitted 					
	if ($data !== 9 ) {
		$curPos = $data; // get the actual button clicked. 0 to 8 correspond to respective cell
		$game["board"][$curPos] = $game["who"]; // set our game's data with player mark
		$game["who"] = ($game["who"]+1)%2; // switch the player turn
		$_SESSION['who'] = $game["who"];
	} else {
		$game["who"] = 0;
		$_SESSION['who'] = $game["who"];
	}
	$outwho .= "Player ".substr($game["playToken"],$game["who"],1)." go!";
	return $outwho;
}

// prepare board (table) for next move with current state data
function displayBoard($output, $outwho) {
	global $game;	
	$board = $game["board"];
	if ($game["clicked"] == 9) {
		for( $i = 0; $i < 9; $i++ ) {
			$output .= '<td><input  class="available" type="submit" name="curCell" placeholder="-" value="' . $i . '"></td>';
			if(($i+1)% 3 == 0  && $i < 8)
				$output .= "</tr><tr>";	
		}		
	}
	if ($game["clicked"] != 9) {
		$curWinner = checkWinner($game); //print_r($curWinner);						
		for( $i = 0; $i < 9; $i++ ) {		
			switch ($board[$i]) {
				case 2:
					if ($curWinner > 990)
						$output .= '<td><input  class="available" type="submit" name="curCell" placeholder="-" value="' . $i . '"></td>';
					else
						$output .= "<td class='played'></td>";
					break;
				case 0:

					if (substr_count($curWinner, $i)) 
						$output .= "<td class='winner'>X</td>";
					else
						$output .= "<td class='played'>X</td>";	
					break;
				case 1:
					if (substr_count($curWinner, $i)) 
						$output .= "<td class='winner'>O</td>";
					else			
						$output .= "<td class='played'>O</td>";	
					break;			
			}	
			if(($i+1)% 3 == 0  && $i < 8)
				$output .= "</tr><tr>";	
		}
	} 
 $message = displayResults(); 
echo "	
	<section class='result'>
		<form method='GET'> 
			<table>
				<tr>
					$output
				</tr>
			</table>
		</form>	
		<h1>$message</h1>
		<h5>$outwho</h5>			
	</section>	
</body>
</html>";  
  return $output;
}	

/*
	check all winning combinations, 
	declare a winner and 
	complete the game
	if: when a winner is identified, display who has won
	elseif: when no more "2" chars are found in the board string, all cells have been played (tie)
	else if there is no winner, display message whose turn it is 	
		//print_r($winCombo[$row]);	//print_r($idx);
*/
function checkWinner($game) {
  global $game;
	$winner = "999";
	$board = $game["board"];
	$data = $game["clicked"];
  
	if ($game["clicked"] !== 9) {
		settype($data, "string");
		$winCombo = array("012","345","678","036","147","258","840","246");
		for( $row = 0; $row < 8; $row++ ) {	
			($data < 9) 
				? $idx = substr_count($winCombo[$row], $data)
				: $idx = -1;	 
			if ($idx == 1) {
				if ( $board[$winCombo[$row][0]] == $board[$winCombo[$row][1]] && 
					 $board[$winCombo[$row][1]] == $board[$winCombo[$row][2]] ) 	{	
						
					if( $board[$winCombo[$row][0]] == '0') {
						$game["win"] = 0;
            //echo $game["win"]." is 0";
						$winner = $winCombo[$row];
					}
					elseif ( $board[$winCombo[$row][0]] == '1') {
						$game["win"] = 1;
            //echo $game["win"]." is 1";
						$winner = $winCombo[$row];
					}
				}
			}
		}		
	} 
	return $winner;
}

function displayResults() {
  global $game;
		if ($game["win"] != -1) {
			$message = "<p>" . substr($game["playToken"],$game["win"],1) . " wins</p>";
			$outwho = "";
		}
		elseif (count_chars($game["board"],3) == "01") {
			$message = "<p>Game over. No winner</p>";
			$outwho = "";
		}  
  return $message;
}
?>
