<?php

// Questão 1
// Considere a function incompleta abaixo e escreva um código que
// resolva o seguinte problema

// Dado um ano, retorne o século em que ele se encontra.
// O primeiro século se estende do ano 1 até e incluindo o ano 100,
// o segundo segundo século do ano 101 até e incluindo o ano 200,
// e assim sucessivamente.

//Exemplo

//Para $ano = 1905, a saída deve ser
//centuryFromYear(year) = 20;
//Pois year = 1700, a saída deve ser
//centuryFromYear(year) = 17.

//Retorno inteiro
//O número do século em que se encontra o ano.

$year = 1970;
$centena = 100;

$answer = function centuryFromYear($year)
{
    if ($year % $centena = 0)  {
    var_dump("O ano $year pertence ao século ($year / $centena).";
} else {
    var_dump("O ano $year pertence ao século ($year / $centena).";
}
}