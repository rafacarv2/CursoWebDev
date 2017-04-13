/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/*
 <li>Ask for the user's first name</li>
 <li>Ask for the user's last name</li>
 <li>Ask for the user's age</li>
 <li>Print out the user's full name in a sentence</li>
 <li>Print out the user's age in a sentence</li>
 */

function start() {
	var nome = prompt("Qual seu primeiro nome?");
	var sobrenome = prompt("Qual seu sobrenome?");
	var idade = prompt("Qual sua idade?");

	alert("Olá " + nome + " " + sobrenome);
	console.log("Olá " + nome + " " + sobrenome);
	alert("Você disse que tem " + idade + " anos");
	console.log("Você disse que tem " + idade + " anos");


}