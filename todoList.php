<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Todo List</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link type="text/css" rel="stylesheet" href="estilos/todoList.css" />
    </head>
    <body>
		<div id="container">
			<h1>To-do List<i class="fa fa-plus" aria-hidden="true"></i></h1>
			<input type="text" placeholder="Adicionar tarefa" />
			<ul>
				<li><span><i class="fa fa-trash" aria-hidden="true"></i></span> Go To Potions Class</li>
				<li><span><i class="fa fa-trash" aria-hidden="true"></i></span> Buy New Robes</li>
				<li><span><i class="fa fa-trash" aria-hidden="true"></i></span> Visit Hagrid</li>
			</ul>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
		<script src="scripts/todoList.js" type="text/javascript"></script>
    </body>
</html>
