<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Jogo da velha</title>
		<!--<link rel="stylesheet" type="text/css" href="estilos/tictactoe.css">-->
		<style type="text/css">
			h1{text-align: center;}
			table{margin: auto;}
			td{
				width: 100px;
				height: 100px;
			}
			.vertical{
				border-left: 1px solid black;
				border-right: 1px solid black;
			}
			.horizontal{
				border-top: 1px solid black;
				border-bottom: 1px solid black;
			}

		</style>
    </head>
    <body>
		<h1>Tic-Tac-Toe</h1>
		
		<table>

			<tr>
				<td></td>
				<td class="vertical"></td>
				<td></td>
			</tr>

			<tr>
				<td class="horizontal "></td>
				<td class="vertical horizontal"></td>
				<td class="horizontal "></td>
			</tr>

			<tr>
				<td></td>
				<td class="vertical"></td>
				<td></td>
			</tr>

		</table>
    </body>
</html>
