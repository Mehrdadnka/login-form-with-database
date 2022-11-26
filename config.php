<?php
function config_db() {
    $server = 'mysql:host=localhost;dbname=epay';
    $user = 'root';
    $pass = '';

    try {
        $pdo = new PDO($server,$user.$pass);
    }
    catch(Exception $e) {
        echo $e->getMessage();
    }
    return $pdo;
}
?>