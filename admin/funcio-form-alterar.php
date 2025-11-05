<?php
    require_once "config.inc.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM funcionarios WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($resultado) > 0){
        $nome = mysqli_fetch_array($resultado);


?>

<h2>Cadastro de Clientes</h2>
<form action="?pg=funcio-alterar" method="post">
    <input type="hidden" name="id" value="<?=$nome['id']?>">
    <label>Nome:</label>
    <input type="text" name="nome" value="<?=$nome['nome']?>"><br>
    <label>Cargo:</label>
    <input type="text" name="cargo" value="<?=$nome['cargo']?>"><br>

    <input type="submit" value="Alterar funcionário">
</form>

<?php
    }else{
        echo "<h2>Nenhum cliente cadastrado!</h2>";
    }
?>