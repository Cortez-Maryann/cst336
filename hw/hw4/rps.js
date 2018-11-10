var imgPlayer;
var playerButtonRock;
var playerButtonPaper;
var playerButtonScissors;
var buttonGo;
var computerChoice;
var playerChoice;

const COLORS = {
	lightGray: '#EEEEEE',
	darkGray: '#888888',
	yellow: '#FFFF00',
	silver: '#C0C0C0'
}

function init() {
	imgPlayer = document.getElementById("imgPlayer");
	playerButtonRock = document.getElementById("btnRock");
	playerButtonPaper = document.getElementById("btnPaper");
	playerButtonScissors = document.getElementById("btnScissors");
	buttonGo = document.getElementById("btnGo");
	deselectAll();
}

/**
 * Deselects the previous chosen move.
 */
function deselectAll() {
	playerButtonRock.style.backgroundColor = COLORS.silver;
	playerButtonPaper.style.backgroundColor = COLORS.silver;
	playerButtonScissors.style.backgroundColor = COLORS.silver;
}

function setBackgroundColor(cssClass, color) {
	document.getElementById(cssClass).style.backgroundColor = color;
}

/**
 * Closes the introduction screen to display the game screen.
 */
function startGame() {
	document.getElementById('introScreen').style.display = 'none';
}

/**
 * Resets the finished game.
 */
function replay() {
	document.getElementById('endScreen').style.display = 'none';
	buttonGo.style.display = 'none';
	deselectAll();
	setBackgroundColor('lblRock', COLORS.lightGray);
	setBackgroundColor('lblPaper', COLORS.lightGray);
	setBackgroundColor('lblScissors', COLORS.lightGray);
	imgPlayer.src = 'images/question.png';
	document.getElementById('imgComputer').src = 'images/question.png';
}


function select(choice) {
	playerChoice = choice;
	imgPlayer.src = `images/${choice}.png`;
	deselectAll();
	if (choice == 0) playerButtonRock.style.backgroundColor = COLORS.darkGray;
	if (choice == 1) playerButtonPaper.style.backgroundColor = COLORS.darkGray;
	if (choice == 2) playerButtonScissors.style.backgroundColor = COLORS.darkGray;
	buttonGo.style.display = 'block';
}

function setResult(title, message) {
	txtEndTitle.innerHTML = title;
	txtEndMessage.innerHTML = message;
}

function gameResult(computerResult, playerResult) {
	let resultDifference = Math.abs(computerResult - playerResult);

	if (computerResult === playerResult) {
		return setResult('', 'Tie');
	}

	if (resultDifference === 1) {
		if (computerResult > playerResult) {
			return setResult('', 'You Lose');
		}
		return setResult('', 'You Win');
	}

	if (resultDifference === 2) {
		if(computerResult < playerResult){
			return setResult('', 'You Lose');
		}
		return setResult('', 'You Win');
	}
}

function start() {
	var txtEndMessage = document.getElementById('txtEndMessage');
	var txtEndTitle = document.getElementById('txtEndTitle');

	var numChoice = Math.floor(Math.random() * 3);
	var imgComputer = document.getElementById('imgComputer');

	setBackgroundColor('lblRock', COLORS.lightGray);
	setBackgroundColor('lblPaper', COLORS.lightGray);
	setBackgroundColor('lblScissors', COLORS.lightGray);

	switch (numChoice) {
		case 0:
			computerChoice = 'rock';
			imgComputer.src = 'images/rock.png';
			setBackgroundColor('lblRock', COLORS.yellow);
			break;

		case 1:
			computerChoice = 'paper';
			imgComputer.src = 'images/paper.png';
			setBackgroundColor('lblPaper', COLORS.yellow);
			break;
		
		case 2:
			computerChoice = 'scissors';
			imgComputer.src = 'images/scissors.png';
			setBackgroundColor('lblScissors', COLORS.yellow);
			break;
		default:
			console.log('This shouldn\'t happen');
			break;			
	}
	
	gameResult(computerChoice, playerChoice);
	document.getElementById('endScreen').style.display = 'block';
}

var imgPlayer;
var playerButtonRock;
var playerButtonPaper;
var playerButtonScissors;
var buttonGo;
var computerChoice;
var playerChoice;

const COLORS = {
	lightGray: '#EEEEEE',
	darkGray: '#888888',
	yellow: '#FFFF00',
	silver: '#C0C0C0'
}

function init() {
	imgPlayer = document.getElementById("imgPlayer");
	playerButtonRock = document.getElementById("btnRock");
	playerButtonPaper = document.getElementById("btnPaper");
	playerButtonScissors = document.getElementById("btnScissors");
	buttonGo = document.getElementById("btnGo");
	deselectAll();
}

/**
 * Deselects the previous chosen move.
 */
function deselectAll() {
	playerButtonRock.style.backgroundColor = COLORS.silver;
	playerButtonPaper.style.backgroundColor = COLORS.silver;
	playerButtonScissors.style.backgroundColor = COLORS.silver;
}

function setBackgroundColor(cssClass, color) {
	document.getElementById(cssClass).style.backgroundColor = color;
}

/**
 * Closes the introduction screen to display the game screen.
 */
function startGame() {
	document.getElementById('introScreen').style.display = 'none';
}

/**
 * Resets the finished game.
 */
function replay() {
	document.getElementById('endScreen').style.display = 'none';
	buttonGo.style.display = 'none';
	deselectAll();
	setBackgroundColor('lblRock', COLORS.lightGray);
	setBackgroundColor('lblPaper', COLORS.lightGray);
	setBackgroundColor('lblScissors', COLORS.lightGray);
	imgPlayer.src = 'images/question.png';
	document.getElementById('imgComputer').src = 'images/question.png';
}


function select(choice) {
	playerChoice = choice;
	imgPlayer.src = 'images/' + choice + '.png';
	deselectAll();
	if (choice == 0) playerButtonRock.style.backgroundColor = COLORS.darkGray;
	if (choice == 1) playerButtonPaper.style.backgroundColor = COLORS.darkGray;
	if (choice == 2) playerButtonScissors.style.backgroundColor = COLORS.darkGray;
	buttonGo.style.display = 'block';
}

function setResult(title, message) {
	txtEndTitle.innerHTML = title;
	txtEndMessage.innerHTML = message;
}

function gameResult(computerResult, playerResult) {
	var resultDifference = Math.abs(computerResult - playerResult);

	if (computerResult === playerResult) {
		setResult('', 'Tie');
	}

	if (resultDifference === 1) {
		if (computerResult > playerResult) {
			setResult('', 'You Lose');
			return;
		}
		setResult('', 'You Win');
	}

	if (resultDifference === 2) {
		if(computerResult < playerResult){
			setResult('', 'You Lose');
			return;
		}
		setResult('', 'You Win');
	}
}

function start() {
	var txtEndMessage = document.getElementById('txtEndMessage');
	var txtEndTitle = document.getElementById('txtEndTitle');

	var numChoice = Math.floor(Math.random() * 3);
	var imgComputer = document.getElementById('imgComputer');

	setBackgroundColor('lblRock', COLORS.lightGray);
	setBackgroundColor('lblPaper', COLORS.lightGray);
	setBackgroundColor('lblScissors', COLORS.lightGray);

	switch (numChoice) {
		case 0:
			computerChoice = 'rock';
			imgComputer.src = 'images/rock.png';
			setBackgroundColor('lblRock', COLORS.yellow);
			break;

		case 1:
			computerChoice = 'paper';
			imgComputer.src = 'images/paper.png';
			setBackgroundColor('lblPaper', COLORS.yellow);
			break;
		
		case 2:
			computerChoice = 'scissors';
			imgComputer.src = 'images/scissors.png';
			setBackgroundColor('lblScissors', COLORS.yellow);
			break;
		default:
			console.log('This shouldn\'t happen');
			break;			
	}
	
	gameResult(computerChoice, playerChoice);
	document.getElementById('endScreen').style.display = 'block';
}

