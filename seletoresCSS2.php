<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Specificity</title>
		<link rel="stylesheet" type="text/css" href="estilos/exercicioCSS.css">
		<style type="text/css">
			body{color: red;}
			ul{color: blue;}
			.highlight{color: yellow}
			#special{color: pink;}
		</style>
    </head>
	<body>
		<a href="http://specificity.keegan.st">
		<p>HELLO!!!</p>
		<ul>
			<li id="special" class="highlight">John</li>
			<li>Paul</li>
			<li>George</li>
			<li class="highlight">Ringo</li>
		</ul>
	</body>
</html>
