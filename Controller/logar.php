<?php

require_once "conecta.php";

if(isset($_POST['email']) && ($_POST['senha'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE email = :email and senha = :senha";
    $stmt = FabricaConexao::Conexao()->prepare($sql);
    $stmt->bindValue(":email",$email);
    $stmt->bindValue(":senha",$senha);
    $stmt->execute();

    if($stmt->rowCount()>0){
        session_start();
        $usuario = $stmt->fetchAll(PDO::FETCH_CLASS);
        $_SESSION["nome"] = $usuario[0]->nome;
        // var_dump($usuario[0]->nome);
        header("Location: ../View/home.php");
    }
    else{
        header("Location: ../View/login.php");
    }
}
else{
    header("Location: ../View/login.php");
}


?>