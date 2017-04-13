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
        <title>Forms & Input</title>
    </head>
    <body>
		<div class="container">
			<div class="jumbotron">
				<h1>This is a Jumbotron!</h1>
				<p>oaushdouia aoudhaoui aosdoaisd aoifjoid pioasd</p>
				<p><a class="btn btn-success btn-lg" href="#" role="button">Hello World</a></p>
			</div>
			<h1>Bootstrap Basics</h1>
			<button class="btn btn-danger btn-xs">CLICK ME!</button>
			<button class="btn btn-success btn-xs active">CLICK ME!</button>
			<button class="btn btn-success btn-xs" disabled="disabled">CLICK ME!</button>

			<a href="http://www.getbootstrap.com" class="btn btn-info btn-lg">Bootstrap Docs</a> 
			<form>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="exampleInputFile">File input</label>
					<input type="file" id="exampleInputFile">
					<p class="help-block">Example block-level help text here.</p>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox"> Check me out
					</label>
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
			<form class="form-inline">
				<div class="form-group">
					<label for="exampleInputName2">Name</label>
					<input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail2">Email</label>
					<input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
				</div>
				<button type="submit" class="btn btn-default">Send invitation</button>
			</form>
		</div>
    </body>
</html>
