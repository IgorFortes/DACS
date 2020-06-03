<?php
    $id       = $_POST['txtId'];
    $nome     = $_POST['txtNome'];
    $descricao     = $_POST['txtDescricao'];
    $valor     = $_POST['txtValor'];
    $categoria     = $_POST['txtCategoria'];
    
    include 'dbconnect.php';
    
    if($id == "0"){
        $insert = "insert into produto(nome, descricao, valor, categoria) values(?,?,?,?);";
        $stmt = mysqli_prepare($con, $insert);
        mysqli_stmt_bind_param($stmt, "ssss", $nome, $descricao, $valor, $categoria);
        mysqli_stmt_execute($stmt);
    }else{
        $update = "update produto set nome=?, descricao=?, valor=?, categoria=? where codigo=?";
        $stmt = mysqli_prepare($con, $update);
        mysqli_stmt_bind_param($stmt, "sssss", $nome, $descricao, $valor, $categoria, $id);
        mysqli_stmt_execute($stmt);
    }
    header('Location: '. 'index.php');

?>











