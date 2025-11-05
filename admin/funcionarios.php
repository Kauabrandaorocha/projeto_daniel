<h3><a class="btn btn-primary" href="?pg=funcio-form">Cadastrar Funcionário</a></h3>
<h2>Lista de páginas do site</h2>
<?php

    require_once "config.inc.php";

    echo "<a href='?pg=funcio-form'>Cadastrar funcionário</a>";

    echo "<h1>Lista de funcionários</h1>";

    $sql = "SELECT * FROM funcionarios";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            echo "ID: ".$dados['id']."<br>";
            echo "Nome: ".$dados['nome']."<br>";
            echo "Cargo: ".$dados['cargo']."<br>";
            echo " <a href='?pg=funcio-form-alterar&id=$dados[id]'>Editar</a>";
            echo "| <a href='?pg=funcio-excluir&id=$dados[id]'>Excluir</a>";
            echo "<hr>";
        }
    }else{
        echo "<h3>Nenhum cliente cadastrado!</h3>";
    }
