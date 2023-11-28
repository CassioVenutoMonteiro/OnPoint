<?php

    require_once 'conecta.php';
    require_once '../Model/usuario.php';

    class DAOUsuario{
        public function insert(Usuario $u){
            $sql = "INSERT INTO usuario VALUES(NULL,?,?,?,?)";
            $stmt = FabricaConexao::Conexao()->prepare($sql);
            $stmt->bindValue(1,$u -> getNome());
            $stmt->bindValue(2,$u -> getSenha());
            $stmt->bindValue(3,$u -> getEmail());
            $stmt->bindValue(4,$u -> getArquivo());

            header('Location: ../View/Login');
        }

        public function Update(Usuario $u){
            $sql = 'UPDATE usuarios SET nome=?, senha=?, email=?, arquivo=? WHERE idUsuario = ?';
            $stmt = FabricaConexao::Conexao()->prepare($sql);

            $stmt->bindValue(1,$u -> getNome());
            $stmt->bindValue(2,$u -> getSenha());
            $stmt->bindValue(3,$u -> getEmail());
            $stmt->bindValue(4,$u -> getArquivo());
            $stmt->bindValue(5,$u -> getIdUsuario());
        }
    }
?>