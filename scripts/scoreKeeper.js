var p1Button = document.getElementById("p1");
var p1Display = document.getElementById("p1Display");
var p1Score = 0;

var p2Button = document.getElementById("p2");
var p2Display = document.getElementById("p2Display");
var p2Score = 0;

var resetButton = document.getElementById("reset");

var numberInput = document.getElementById("maxScore");
var winnignScore = parseInt(numberInput.value);
var winningScoreDisplay = document.getElementById("winningScoreVal");
winningScoreDisplay.textContent = winnignScore;

var gameOver = false;

numberInput.addEventListener("change", function () {
	winnignScore = parseInt(numberInput.value);
	winningScoreDisplay.textContent = winnignScore;
});

p1Button.addEventListener("click", function () {
	if (!gameOver) {
		p1Score++;

		if (p1Score === winnignScore) {
			p1Display.classList.add("winner");
			console.log("GAME OVER!!!");
			gameOver = true;
		}

		p1Display.textContent = p1Score;
	}
});

p2Button.addEventListener("click", function () {
	if (!gameOver) {
		p2Score++;

		if (p2Score === winnignScore) {
			p2Display.classList.add("winner");
			console.log("GAME OVER!!!");
			gameOver = true;
		}

		p2Display.textContent = p2Score;

	}
});

resetButton.addEventListener("click", function () {
	p1Score = 0;
	p1Display.textContent = p1Score;
	p1Display.classList.remove("winner");
	p2Score = 0;
	p2Display.textContent = p2Score;
	p2Display.classList.remove("winner");
	gameOver = false;
});

