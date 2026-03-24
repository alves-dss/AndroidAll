<?php

    $nome = $_GET['nome'];
    $idade = $_GET['idade'];

    $conexao = new PDO("mysql:host=127.0.0.1;dbname=aulaJSON", "root", "");

    // Ativar modo de erro para exceções
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $comandoSQL = $conexao->prepare("INSERT INTO alunos(nome, idade) VALUES (:nome, :idade)");

    $comandoSQL->bindParam(":nome", $nome);
    $comandoSQL->bindParam(":idade", $idade);

    $comandoSQL->execute();

    echo "Dados inseridos com sucesso!";

?>