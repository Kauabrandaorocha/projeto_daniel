<?php

    require_once "config.inc.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST["nome"];
        $cargo= $_POST["cargo"];

        $sql = "INSERT INTO funcionarios (nome, cargo) 
            VALUES ('$nome', '$cargo')";

        $executa = mysqli_query($conexao, $sql);
        if($executa) {
            echo "<h2>Cadastro realizado com sucesso.</h2>";
            echo "<a href='?pg=funcionarios'>Voltar</a>";
        }else{
            echo "<h2>Erro ao cadastrar.</h2>";
            echo "<a href='?pg=funcionarios'>Voltar</a>";
        }
    }else{
        echo "<h2>Acesso negado.</h2>";
        echo "<a href='?pg=funcionarios'>Voltar</a>";
    }