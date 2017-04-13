/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function calcula1(botao) {
	botao.parentElement.removeChild(botao);
	var txt = "";
	for (var i = -10, max = 20; i < max; i++) {
		txt += i + ' ';
	}
	document.getElementById("resposta1").innerHTML = '<b>Resposta:</b> <br />' + txt;
//	$("#resposta1").text(txt);
}

function calcula2(botao) {
	botao.parentElement.removeChild(botao);
	var txt = "";
	for (var i = 10, max = 41; i < max; i = i + 2) {
		txt += i + ' ';
	}
	document.getElementById("resposta2").innerHTML = '<b>Resposta:</b> <br />' + txt;
}

function calcula3(botao) {
	botao.parentElement.removeChild(botao);
	var txt = "";
	for (var i = 300, max = 334; i < max; i++) {

		if (i % 2 !== 0) {
			txt += i + ' ';
		}
	}
	document.getElementById("resposta3").innerHTML = '<b>Resposta:</b> <br />' + txt;
}

function calcula4(botao) {
	botao.parentElement.removeChild(botao);
	var txt = "";
	for (var i = 5, max = 51; i < max; i++) {

		if (i % 3 === 0 && i % 5 === 0) {
			txt += i + ' ';
		}

	}
	document.getElementById("resposta4").innerHTML = '<b>Resposta:</b> <br />' + txt;
}



function K2S(str) {
	document.getElementById("k2sReturn").value = str.replace(/-/g, "_");
}

function S2K(str) {
	document.getElementById("s2kReturn").value = str.replace(/_/g, "-");
}