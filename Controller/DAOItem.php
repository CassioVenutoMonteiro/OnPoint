<?php

    require_once "conecta.php";
    require_once "../Model/item.php";

    class DAOItem{
        public function Insert(Item $i){
            $sql = "INSERT INTO item VALUES(NULL,?,?,?,?,?,?)";
            $stmt = FabricaConexao::Conexao()->prepare($sql);
            $stmt->bindValue(1, $i -> getNome());
            $stmt->bindValue(2, $i -> getTipo());
            $stmt->bindValue(3, $i -> getEvento());
            $stmt->bindValue(4, $i -> getCor());
            $stmt->bindValue(5, $i -> getArquivo());
            $stmt->bindValue(6, $i -> getUsuario());
            $stmt->execute();
            header('Location: ../View/addItem.php?msg=Item adicionado');
        }
    }

?>