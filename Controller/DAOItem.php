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

        public function Update(Item $i){
            $sql = "UPDATE item SET nome=?, tipo=?, evento=?, cor=?, arquivo=? WHERE id_item = ?";
            $stmt = FabricaConexao::Conexao()->prepare($sql);
            $stmt->bindValue(1, $i -> getNome());
            $stmt->bindValue(2, $i -> getTipo());
            $stmt->bindValue(3, $i -> getEvento());
            $stmt->bindValue(4, $i -> getCor());
            $stmt->bindValue(5, $i -> getArquivo());
            $stmt->bindValue(6, $i -> getIdItem());
            $stmt->execute();
            header('Location: ../View/addItem.php?msg=Item adicionado');
        }

        public function Find($id){
            $sql = "SELECT * FROM item WHERE id_item = :id";
            $stmt = FabricaConexao::Conexao()->prepare($sql);
            $stmt->bindParam(':id',$id,PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
        }
        public function Delete($id){
            $sql = "DELETE FROM item WHERE id_item = :id";
            $stmt = FabricaConexao::Conexao()->prepare($sql);
            $stmt->bindParam(':id',$id,PDO::PARAM_INT);
            $stmt->execute();
            header('Location: ../View/item.php');
        }

    }

?>