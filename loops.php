<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>While Loops</title>
		<script type="text/javascript" src="scripts/loops.js"></script>
		<link type="text/css" rel="stylesheet" href="bootstrap337/css/bootstrap.min.css">
		<style type="text/css">
			.col-xs-3{border: 1px solid black;}
			.funcString{
				border: 1px solid black;
				margin-top: 50px;
				text-align: center;	
				padding-bottom: 25px;
			}
			/*.enunciado{text-align: center;}*/
		</style>
    </head>
    <body>
		<div class="container">
			<div class="row">
				<div class="col-xs-3">
					<p class="enunciado">-10 -> 19<br />&nbsp;</p>
					<button onclick="calcula1(this);" class="btn btn-default btn-group-lg btn-success center-block">Calcular</button>
					<p id="resposta1"></p>
				</div>
				<div class="col-xs-3">
					<p class="enunciado">10 -> 40 <br />(pares)</p>
					<button onclick="calcula2(this);" class="btn btn-default btn-group-lg btn-success center-block">Calcular</button>
					<p id="resposta2"></p>
				</div>
				<div class="col-xs-3">
					<p class="enunciado">300 -> 333 <br />(ímpares)</p>
					<button onclick="calcula3(this);" class="btn btn-default btn-group-lg btn-success center-block">Calcular</button>
					<p id="resposta3"></p>
				</div>
				<div class="col-xs-3">
					<p class="enunciado">5 -> 50 <br />(%5=0 %3=0)</p>
					<button onclick="calcula4(this);" class="btn btn-default btn-group-lg btn-success center-block">Calcular</button>
					<p id="resposta4"></p>
				</div>
			</div>


			<div class="row">

				<div class="col-lg-6">
					<div class="funcString">
						<h2>Kebab-Case to Snake_Case</h2>
						<div class="form-inline">
							<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="k2sText" placeholder="Kebab-Case">

							<button onclick="K2S(k2sText.value)" type="submit" class="btn btn-primary">Converter</button>

							<div class="input-group mb-2 mr-sm-2 mb-sm-0">
								<input type="text" class="form-control" id="k2sReturn" placeholder="Snake_Case" disabled="disabled">
							</div>
						</div> 
					</div>
				</div>

				<div class="col-lg-6">
					<div class="funcString">
						<h2>Snake_Case to Kebab-Case</h2>
						<div class="form-inline">
							<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="s2kText" placeholder="Snake_Case">

							<button onclick="S2K(s2kText.value)" type="submit" class="btn btn-primary">Converter</button>

							<div class="input-group mb-2 mr-sm-2 mb-sm-0">
								<input type="text" class="form-control" id="s2kReturn" placeholder="Kebab-Case" disabled="disabled">
							</div>
						</div> 
					</div>
				</div>

			</div>
		</div>
    </body>
</html>
