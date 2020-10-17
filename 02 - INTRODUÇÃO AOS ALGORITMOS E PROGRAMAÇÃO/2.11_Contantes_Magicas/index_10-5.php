<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('10.5 - Constantes e Contantes Mágicas');

/*
 *
 */
PHPClassSession('CONSTANTES', __LINE__);

define("COURSE", "PROGRAMADOR WEB"); // É interpretado durante a execução
const AUTHOR = "GOVERNO FEDERAL"; // É interpretado antes da execução

$formation = true;

if ($formation) {
    define("COURSE_TYPE", "Formação");
} else {
    define("COURSE_TYPE", "Curso");
}

$AUTHOR = "GUADALUPE";

echo "<p>" . COURSE_TYPE . " " . COURSE . " do " . AUTHOR . "</p>";
echo "<p>{COURSE_TYPE} {COURSE} do {AUTHOR}</p>";
echo "<p>{$COURSE_TYPE} {$COURSE} do {$AUTHOR}</p>";

// como observação poderia ser criado neste local uma constantes para CLASS,
// MAS NÃO É LOCAL IDEAL;

class Config
{
    const USER = "root";
    const HOST = "localhost";
}

// mostra as constantes criadas pelo programador
var_dump(get_defined_constants(true)["user"]);

PHPClassSession('CONSTANTES MÁGICAS', __LINE__);

var_dump([__DIR__, __FILE__, __LINE__, __CLASS__]);