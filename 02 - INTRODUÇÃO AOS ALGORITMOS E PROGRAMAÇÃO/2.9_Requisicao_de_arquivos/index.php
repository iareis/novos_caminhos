<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('10.2 REQUISIÇÃO DE ARQUIVOS');

/*
 *
 */
PHPClassSession('INCLUDE, INCLUDE_0NCE', __LINE__);

include "file.php";
echo "<p>CONTINUE</p>";

// include "header.php";
include __DIR__ . "/header.php";

var_dump(__DIR__);

$profile = new stdClass();
$profile->name = "Iuri";
$profile->company = "IFTO";
$profile->email = "iareis@gmail.com";
var_dump($profile);

include_once __DIR__ . "/profile.php";
var_dump(include_once __DIR__ . "/profile.php");

PHPClassSession('REQUIRE, REQUIRE_0NCE', __LINE__);

// require "file.php";
echo "<p>CONTINUE</p>";