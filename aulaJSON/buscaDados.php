<?php

    $conexao = new PDO("mysql:host=127.0.0.1;dbname=aulaJSON", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $comandoSQL = $conexao->query("SELECT * FROM alunos");

    $arrayJSON = array();

    while($linhaDB = $comandoSQL->fetch(PDO::FETCH_ASSOC)){
        $arrayJSON[] = $linhaDB;
    }

    $saidaJSON = json_encode($arrayJSON, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

    header('Content-Type: application/json');

    echo $saidaJSON;

?>