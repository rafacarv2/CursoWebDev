<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="bootstrap337/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="estilos/bootGallery.css" />
        <title>Galeria com Bootstrap</title>
    </head>
    <body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand"><span class="glyphicon glyphicon-picture"></span> IMGs</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-nav-demo">
					<ul class="nav navbar-nav">
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Sign Up</a></li>
						<li><a href="#">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="jumbotron">
				<h1><i class="fa fa-hand-peace-o" aria-hidden="true"></i> Image Gallery</h1>
				<p>Fotos que eu não tirei</p>
			</div>
			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<div class="thumbnail">
						<img src="http://i.imgur.com/qK42fUu.jpg">
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="thumbnail">
						<img src="https://images.unsplash.com/photo-1435771112039-1e5b2bcad966?dpr=2&amp;fit=crop&amp;fm=jpg&amp;h=825&amp;q=50&amp;w=1450">
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="thumbnail">
						<img src="https://images.unsplash.com/photo-1442406964439-e46ab8eff7c4?dpr=2&amp;fit=crop&amp;fm=jpg&amp;h=825&amp;q=50&amp;w=1450">
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="thumbnail">
						<img src="https://images.unsplash.com/photo-1439524970634-649c37a69e5c?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;w=1450&amp;h=825&amp;fit=crop&amp;s=bfda9916c885869b43b70738693428d9">
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="thumbnail">
						<img src="https://images.unsplash.com/photo-1444090542259-0af8fa96557e?dpr=2&amp;fit=crop&amp;fm=jpg&amp;h=825&amp;q=50&amp;w=1450">
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="thumbnail">
						<img src="https://images.unsplash.com/photo-1434543177303-ef2cc7707e0d?dpr=2&amp;fit=crop&amp;fm=jpg&amp;h=825&amp;q=50&amp;w=1450">
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="thumbnail">
						<img src="https://images.unsplash.com/photo-1436262513933-a0b06755c784?dpr=2&amp;fit=crop&amp;fm=jpg&amp;h=825&amp;q=50&amp;w=1450">
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="thumbnail">
						<img src="https://images.unsplash.com/photo-1439396087961-98bc12c21176?dpr=2&amp;fit=crop&amp;fm=jpg&amp;h=825&amp;q=50&amp;w=1450">
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="thumbnail">
						<img src="https://images.unsplash.com/photo-1439694458393-78ecf14da7f9?dpr=2&amp;fit=crop&amp;fm=jpg&amp;h=825&amp;q=50&amp;w=1450">
					</div>
				</div>
			</div>
		</div>


		<script src="https://code.jquery.com/jquery-3.2.1.min.js" 
				integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" 
				crossorigin="anonymous"
		></script>
		<script type="text/javascript" src="bootstrap337/js/bootstrap.min.js"></script>
    </body>
</html>
