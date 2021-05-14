/*
 *  function cellClick() executes when human player clicks on one of the
 *  five images to make his choice. The function takes one argument which
 *  is the node (object) representing the clicked element (dl)
 */
function cellClick(cell){
    var machine;
    var message = "";
    var choices = ["paper", "scissors", "rock", "lizard", "spock" ];
    var winner = { 
        rock : [ "paper", "spock"],
        paper : [ "scissors", "lizard"],
        scissors : [ "spock", "rock" ],
        lizard : [ "rock","scissors" ],
        spock : [ "lizard", "paper" ]
    };
    removeResults(); 
    machine = Math.floor((Math.random() * 5) + 1);
    var csel = choices[machine-1];
    var hsel = cell.getAttribute("data-human-choice");
    if ( csel == hsel ) 
        message = " IT'S A TIE! "; 
    else
        (winner[csel][0] == hsel || winner[csel][1] == hsel) 
            ? message = " YOU WIN! " 
            : message = " MACHINE WINS! ";  
    displayResults(message, csel, hsel); 
}  


/*
 *  function displayResults() is called by function cellClick() to render
 *  the results of the current game.  It creates the elements and populates
 *  them based on the outcome of the game; modifies live DOM.  It takes three 
 *  arguments, the message who won, computer choice, and human player choice.
 */
function displayResults(message, csel, hsel) {     
    var aimove = document.getElementById("aimove");
    var par1 = aimove.appendChild(document.createElement("p"));
    par1.innerText = "MACHINE \n chose \n" + csel;
    par1.setAttribute("id", "par1");
    var cImg = document.createElement("img");
    cImg.setAttribute("src", "../images/"+csel+".png");
    cImg.setAttribute("alt", 'object chosen by human player');
    cImg.setAttribute("width", "50");
    par1.appendChild(cImg);
    
    var par2 = aimove.appendChild(document.createElement("p"));
    par2.innerText = "YOU \n chose \n" + hsel;
    par2.setAttribute("id", "par2");
    var hImg = document.createElement("img");
    hImg.setAttribute("src", "../images/"+hsel+".png");
    hImg.setAttribute("alt", 'object chosen by human player');
    hImg.setAttribute("width", "50");
    par2.appendChild(hImg);  
    
    var h2 = aimove.appendChild(document.createElement("h2"));
    h2.setAttribute("id", "mesg");
    h2.innerText = message;
}
   

/*
 *  function removeResults() is called by function cellClick() to remove the
 *  elements and their content of the previous game created by function
 *  displayResults(). It takes no arguments; modifies live DOM.
 */   
function removeResults() {
    var parent = document.getElementById("aimove");
    while(parent.hasChildNodes()) {
       parent.removeChild(parent.lastChild);   
    }
}
    
    
/*
 *  function init() is called by the event listener "DOMContentLoaded".  It
 *  sets up an event listener for each element that hold the
 *  choice for the human player to choose by clicking on it.
 */    
function init() {
    // event: when the user selects an option
    var board = document.getElementsByTagName("DL");
    var howMany = board.length;
    for (let i=0; i < howMany; i++) {
      board[i].addEventListener("click", function(){
        cellClick(this);
      });       
    }
    // event: when the user click reset button
    document.getElementById("greset").addEventListener("click", function(){
        location.reload();
        }, false);
} 


/*
 *
 */
document.addEventListener("DOMContentLoaded", init);