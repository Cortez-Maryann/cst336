var imgPlayer;
var playerButtonRein;
var playerButtonJunkrat;
var playerButtonWidowmaker;
var buttonGo;
var computerChoice;
var playerChoice;

const COLORS = {
	lightGray: '#EEEEEE',
	darkGray: '#888888',
	yellow: '#FFFF00',
	silver: '#C0C0C0',
	green: '19f428'
}

function init() {
	imgPlayer = document.getElementById("imgPlayer");
	playerButtonRein = document.getElementById("btnRock");
	playerButtonJunkrat = document.getElementById("btnPaper");
	playerButtonWidowmaker = document.getElementById("btnScissors");
	buttonGo = document.getElementById("btnGo");
	deselectAll();
}

/**
 * Deselects the previous chosen move.
 */
function deselectAll() {
	playerButtonRein.style.backgroundColor = COLORS.silver;
	playerButtonJunkrat.style.backgroundColor = COLORS.silver;
	playerButtonWidowmaker.style.backgroundColor = COLORS.silver;
}

function setBackgroundColor(cssClass, color) {
	document.getElementById(cssClass).style.backgroundColor = color;
}

/**
 * Closes the introduction screen to display the game screen.
 */
function startGame() {
	document.getElementById("introScreen").style.display = 'none';
	document.getElementById("howToPlay").style.display = 'none';
	
}

/**
 * Displays the How To Play screen.
 */
function help(){
	document.getElementById("howToPlay").style.display = 'block';
}

/**
 * Resets the finished game.
 */
function replay() {
	document.getElementById("endScreen").style.display = 'none';
	buttonGo.style.display = 'none';
	deselectAll();
	setBackgroundColor('lblRein', COLORS.lightGray);
	setBackgroundColor('lblJunk', COLORS.lightGray);
	setBackgroundColor('lblWidow', COLORS.lightGray);
	imgPlayer.src = 'images/select.png';
	document.getElementById("imgComputer").src = 'images/select.png';
}

/**
 * Highlights selected character.
 */
function select(choice) {
	playerChoice = choice;
	deselectAll();
	if (choice == 0) {
		playerButtonRein.style.backgroundColor = COLORS.darkGray;
		imgPlayer.src = 'images/reinhardt.png';
	}
	if (choice == 1) {
		playerButtonJunkrat.style.backgroundColor = COLORS.darkGray;
		imgPlayer.src = 'images/junkrat.png';
	}
	if (choice == 2) {
		playerButtonWidowmaker.style.backgroundColor = COLORS.darkGray;
		imgPlayer.src = 'images/widowmaker.png';
	}
	buttonGo.style.display = 'block';
}

/**
 * Displays the result from the game.
 */
function setResult(title, message) {
	document.getElementById("txtEndTitle").innerHTML = title;
	document.getElementById("txtEndMessage").innerHTML = message;
	document.getElementById("txtEndMessage").style.color = COLORS.green;

}

/**
 * Calculates the win condition and displays it.
 */
function gameResult(computerResult, playerResult) {
	var resultDifference = Math.abs(computerResult - playerResult);

	if (computerResult === playerResult) {
		setResult('', 'Tie');
	}

	else if (resultDifference === 1) {
		if (computerResult > playerResult) {
			setResult('', 'You Lose');
			return;
		}
		setResult('', 'You Win');
	}

	else if (resultDifference === 2) {
		if(computerResult < playerResult){
			setResult('', 'You Lose');
			return;
		}
		setResult('', 'You Win');
	}
}

/**
 * This function gives the computer a random value and displays the game result.
 */
function start() {
	var numChoice = Math.floor(Math.random() * 3);
	var imgComputer = document.getElementById('imgComputer');

	setBackgroundColor('lblRein', COLORS.lightGray);
	setBackgroundColor('lblJunk', COLORS.lightGray);
	setBackgroundColor('lblWidow', COLORS.lightGray);

	switch (numChoice) {
		case 0:
			computerChoice = 0;
			imgComputer.src = 'images/reinhardt.png';
			setBackgroundColor('lblRein', COLORS.yellow);
			break;

		case 1:
			computerChoice = 1;
			imgComputer.src = 'images/junkrat.png';
			setBackgroundColor('lblJunk', COLORS.yellow);
			break;
		
		case 2:
			computerChoice = 2;
			imgComputer.src = 'images/widowmaker.png';
			setBackgroundColor('lblWidow', COLORS.yellow);
			break;
		default:
			console.log('This shouldn\'t happen');
			break;			
	}
	
	gameResult(computerChoice, playerChoice);
	document.getElementById('endScreen').style.display = 'block';
}