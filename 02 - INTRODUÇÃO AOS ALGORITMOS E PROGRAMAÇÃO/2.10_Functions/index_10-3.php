<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('10.3 FUNÇÕES');

/*
 *
 */

require __DIR__ . '/functions.php';

PHPClassSession('FUNCTIONS', __LINE__);

var_dump(functionName("IURI", "ALBUQUERQUE", "REIS"));
var_dump(functionName("1970", "AQUÁRIO", "HETERO"));

var_dump(calcIMC(126, 1.83));
var_dump(calcIMC(100, 1.63));
var_dump(calcIMC(52, 1.43));

PHPClassSession('GLOBAL ACCESS', __LINE__);
PHPClassSession('STATIC ARGUMENTS', __LINE__);
PHPClassSession('DINAMIC ARGUMENTS', __LINE__);