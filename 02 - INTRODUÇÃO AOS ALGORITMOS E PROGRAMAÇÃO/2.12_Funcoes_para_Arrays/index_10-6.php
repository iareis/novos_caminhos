<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('10.6 e 10.7 Manipulação de Vetores');

/*
 *
 */
PHPClassSession('MANIPULAÇÃO', __LINE__);

$index = ["FRONT END DEVELOPER", "BACK END DEVELOPER", "FULL STACK DEVELOPER"];

$assoc = [
    "dev1" => "FRONT END DEVELOPER",
    "dev2" => "BACK END DEVELOPER",
    "dev3" => "FULL STACK DEVELOPER",
];

array_unshift($index, "", "FULL CYCLE DEVELOPER");
$assoc = ["dev4" => "FULL CYCLE DEVELOPER"] + $assoc;

array_push($index, "", "DEVOPS");
$assoc = $assoc + ["dev5" => "DEVOPS"];

array_shift($index);
array_shift($assoc);

array_pop($index);
array_pop($assoc);

var_dump($index, $assoc);

PHPClassSession('ORDENAÇÃO', __LINE__);
PHPClassSession('VERIFICAÇÃO', __LINE__);
PHPClassSession('EXEMPLO PRÁTICO', __LINE__);
