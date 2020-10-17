<?php
require __DIR__ . '/../framework/config.php';
PHPClassName(
    '10.4 - Acesso Global e Variáveis Estáticas e Argumentos Dinâmicos'
);

require __DIR__ . '/functions.php';

PHPClassSession('FUNCTIONS', __LINE__);

echo "<h2>ver index_10-3.php</h2>";

PHPClassSession('GLOBAL ACCESS', __LINE__);

$weight = 52;
$height = 1.54;

var_dump(calcIMC_Global());

PHPClassSession('STATIC ARGUMENTS', __LINE__);

$pay = payTotal(2000);
$pay = payTotal(150);
$pay = payTotal(250);

var_dump($pay);

PHPClassSession('DINAMIC ARGUMENTS', __LINE__);

var_dump(myTeam());
var_dump(myTeam("Iuri"));
var_dump(myTeam("Iuri", "Marcia"));
var_dump(myTeam("Iuri", "Marcia", "Ísis"));