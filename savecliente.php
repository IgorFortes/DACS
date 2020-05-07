<?php
    $id       = $_POST['txtId'];
    $nome     = $_POST['txtNome'];
    $endereco = $_POST['txtEndereco'];
    
    var_dump($id);
    var_dump($nome);
    var_dump($endereco);
    
    $con = mysqli_connect("localhost","bob","bob","univille");
    
    if($id == "0"){
        $insert = "insert into cliente(nome, endereco) values(?,?);";
        $stmt = mysqli_prepare($con, $insert);
        mysqli_stmt_bind_param($stmt, "ss", $nome, $endereco);
        mysqli_stmt_execute($stmt);
    }else{
        $update = "update cliente set nome=?, endereco=? where codigo=?";
        $stmt = mysqli_prepare($con, $update);
        mysqli_stmt_bind_param($stmt, "sss", $nome, $endereco, $id);
        mysqli_stmt_execute($stmt);
    }
    header('Location: '. 'index.php');

?>











