
//var colors = [
////	"rgb(255, 0, 0)",
////	"rgb(255, 255, 0)",
////	"rgb(0, 255, 0)",
////	"rgb(0, 255, 255)",
////	"rgb(0, 0, 255)",
////	"rgb(255, 0, 255)"
//	"rgb(0, 0, 255)",
//	"rgb(0, 255, 0)",
//	"rgb(0, 255, 255)",
//	"rgb(255, 0, 0)",
//	"rgb(255, 0, 255)",
//	"rgb(255, 255, 0)"
//];



var numSquares = 6;
var colors = [];
var pickedColor;
var squares = document.getElementsByClassName("square");
var colorDisplay = document.getElementById("colorDisplay");
var messageDisplay = document.getElementById("message");
var header = document.getElementById("header");
var resetButton = document.getElementById("reset");
var modeButtons = document.getElementsByClassName("mode");



colorDisplay.textContent = pickedColor;

init();

function init() {
	setupModeButtons();
	setupSquares();
	reset();
}


function setupModeButtons() {
	for (var i = 0; i < modeButtons.length; i++) {
		modeButtons[i].addEventListener("click", function () {
			modeButtons[0].classList.remove("selected");
			modeButtons[1].classList.remove("selected");
			this.classList.add("selected");
			this.textContent === "Fácil" ? numSquares = 3 : numSquares = 6;
			reset();

		});

	}
}

function setupSquares() {

	for (var i = 0; i < squares.length; i++) {

		squares[i].addEventListener("click", function () {

			var clickedColor = this.style.background;

			if (clickedColor === pickedColor) {
				messageDisplay.textContent = "Correto!!!";
				resetButton.textContent = "Jogar de Novo";
				changeColors(clickedColor);
				header.style.background = pickedColor;
			} else {
				this.style.background = "#232323";
				messageDisplay.textContent = "Tente de novo";

			}
			console.log(this.id);
		});
	}
}

function reset() {

	colors = generateRandomColors(numSquares);
	pickedColor = pickColor();
	colorDisplay.textContent = pickedColor;
	header.style.background = "steelblue";
	messageDisplay.textContent = "";
	for (var i = 0; i < squares.length; i++) {
		if (colors[i]) {

			squares[i].style.display = "block";
			squares[i].style.background = colors[i];
		} else {
			squares[i].style.display = "none";
//			squares[i].style.background = colors[i];
		}

	}
	resetButton.textContent = "Novas Cores";



}

//easyBtn.addEventListener("click", function () {
//	easyBtn.classList.add("selected");
//	hardBtn.classList.remove("selected");
//	numSquares = 3;
//
//	colors = generateRandomColors(numSquares);
//	pickedColor = pickColor();
//	colorDisplay.textContent = pickedColor;
//	messageDisplay.textContent = "";
//	header.style.background = "steelblue";
//	for (var i = 0; i < squares.length; i++) {
//		if (colors[i]) {
//			squares[i].style.display = "block";
//			squares[i].style.background = colors[i];
//		} else {
//			squares[i].style.display = "none";
//		}
//	}
//});

//hardBtn.addEventListener("click", function () {
//	hardBtn.classList.add("selected");
//	easyBtn.classList.remove("selected");
//	numSquares = 6;
//
//	colors = generateRandomColors(numSquares);
//	pickedColor = pickColor();
//	colorDisplay.textContent = pickedColor;
//	messageDisplay.textContent = "";
//	header.style.background = "steelblue";
//	for (var i = 0; i < squares.length; i++) {
////		if (colors[i]) {
//		squares[i].style.display = "block";
//		squares[i].style.background = colors[i];
////		} 
////		else {
////			squares[i].style.display = "none";
////		}
//	}
//
//});


resetButton.addEventListener("click", function () {
	reset(numSquares);
});




function changeColors(color) {
	for (var i = 0; i < squares.length; i++) {
		squares[i].style.background = color;
	}


}


function pickColor() {
	var randomColor = Math.floor(Math.random() * colors.length);
	return colors[randomColor];
}


function generateRandomColors(num) {


	var arr = [];

	for (var i = 0; i < num; i++) {
		arr.push(randomColor());
	}



	return arr;

}

function randomColor() {
	var r = Math.floor(Math.random() * 256);
	var g = Math.floor(Math.random() * 256);
	var b = Math.floor(Math.random() * 256);
	return "rgb(" + r + ", " + g + ", " + b + ")";
}
