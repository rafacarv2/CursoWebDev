<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Color Game</title>
		<link href="https://fonts.googleapis.com/css?family=Nunito:300,600" rel="stylesheet">
		<link href="estilos/colorGame2.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
		<h1 id="header">The Great <br />
			<span id="colorDisplay">RGB</span><br /> 
			Color Game</h1>
		<div id="stripe">
			<button id="reset">Novas cores</button>
			<span id="message"></span>
			<button class="mode" id="easyBtn">Fácil</button>
			<button class="mode selected" id="hardBtn">Difícil</button>
		</div>
		<div id="container">
			<div class="square" id="1"></div>
			<div class="square" id="2"></div>
			<div class="square" id="3"></div>
			<div class="square" id="4"></div>
			<div class="square" id="5"></div>
			<div class="square" id="6"></div>
		</div>
    </body>
	<script src="scripts/colorGame2.js" type="text/javascript"></script>
</html>
