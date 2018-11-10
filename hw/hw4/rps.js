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
 * This function deselects the previous chosen move.
 */
function deselectAll() {
	playerButtonRock.style.backgroundColor = COLORS.silver;
	playerButtonPaper.style.backgroundColor = COLORS.silver;
	playerButtonScissors.style.backgroundColor = COLORS.silver;
}

function startGame() {
	document.getElementById('introScreen').style.display = 'none';
}

function replay() {
	document.getElementById('endScreen').style.display = 'none';
	buttonGo.style.display = 'none';
	deselectAll();
	document.getElementById('lblRock').style.backgroundColor = COLORS.lightGray;
	document.getElementById('lblPaper').style.backgroundColor = COLORS.lightGray;
	document.getElementById('lblScissors').style.backgroundColor = COLORS.lightGray;
	imgPlayer.src = 'images/question.png';
	document.getElementById('imgComputer').src = 'images/question.png';
}

function select(choice) {
	playerChoice = choice;
	imgPlayer.src = 'images/' + choice + '.png';
	deselectAll();
	if (choice == 'rock') playerButtonRock.style.backgroundColor = COLORS.darkGray;
	if (choice == 'paper') playerButtonPaper.style.backgroundColor = COLORS.darkGray;
	if (choice == 'scissors') playerButtonScissors.style.backgroundColor = COLORS.darkGray;
	buttonGo.style.display = 'block';
}

function go() {
	var txtEndMessage = document.getElementById('txtEndMessage');
	var txtEndTitle = document.getElementById('txtEndTitle');

	var numChoice = Math.floor(Math.random() * 3);
	var imgComputer = document.getElementById('imgComputer');

	document.getElementById('lblRock').style.backgroundColor = COLORS.lightGray;
	document.getElementById('lblPaper').style.backgroundColor = COLORS.lightGray;
	document.getElementById('lblScissors').style.backgroundColor = COLORS.lightGray;

	switch (numChoice) {
		case 0:
			computerChoice = 'rock';
			imgComputer.src = 'images/rock.png';
			document.getElementById('lblRock').style.backgroundColor = COLORS.yellow;
			if (playerChoice = 'rock') {
				txtEndTitle.innerHTML = '';
				txtEndMessage.innerHTML = 'Tie';
			}
			else if (playerChoice = 'paper') {
				txtEndTitle.innerHTML = '';
				txtEndMessage.innerHTML = 'You Win';
			}
			else if (playerChoice = 'scissors') {
				txtEndTitle.innerHTML = '';
				txtEndMessage.innerHTML = 'You Lose';
			}
			break;

		case 1:
			computerChoice = 'paper';
			imgComputer.src = 'images/paper.png';
			document.getElementById('lblPaper').style.backgroundColor = COLORS.yellow;
			if (playerChoice = 'rock') {
				txtEndTitle.innerHTML = '';
				txtEndMessage.innerHTML = 'You Lose';
			}
			else if (playerChoice = 'paper') {
				txtEndTitle.innerHTML = '';
				txtEndMessage.innerHTML = 'Tie';
			}
			else if (playerChoice = 'scissors') {
				txtEndTitle.innerHTML = '';
				txtEndMessage.innerHTML = 'You Win';
			}
			break;
		
		case 2:
			computerChoice = 'scissors';
			imgComputer.src = 'images/scissors.png';
			document.getElementById('lblScissors').style.backgroundColor = COLORS.yellow;

			if (playerChoice = 'rock') {
				txtEndTitle.innerHTML = '';
				txtEndMessage.innerHTML = 'You Win';
			}

			else if (playerChoice = 'paper') {
				txtEndTitle.innerHTML = '';
				txtEndMessage.innerHTML = 'You Lose';
			}

			else if (playerChoice = 'scissors') {
				txtEndTitle.innerHTML = '';
				txtEndMessage.innerHTML = 'Tie';
			}
			break;
		default:
			console.log('This shouldn\'t happen');
			break;			
	}

	document.getElementById('endScreen').style.display = 'block';
}

