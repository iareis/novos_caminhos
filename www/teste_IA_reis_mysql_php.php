<?php
/* phpinfo(); */

/* try {
    //code...
} catch (\Throwable $th) {
    //throw $th;
} */
$question = null;

try {
    $question = new PDO(
        'mysql:host=mysql;dbname-novos_caminhos',
        'root',
        'root'
    );
    $dados = $question->query("select * from PROVIDERS");
    foreach ($dados as $providers) {
        echo "O cliente" . $providers . "passou no teste<br>";
    }
} catch (PDOException $e) {
    print $e->getMessage();
    die();
}

/* foreach ($variable as $key => $value) {
    # code...
} */