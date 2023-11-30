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

        public function Find($id){
            $sql = "SELECT * FROM usuario where = :id";
            $stmt = FabricaConexao::Conexao()->prepare($sql);
            $stmt->bindParam(':id', $id,PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
        }

        public function Delete($id){
            $sql = "DELETE FROM usuarios WHERE idUsuario = :id";
            $stmt = FabricaConexao::Conexao()->prepare($sql);
            $stmt->execute();
            header('Location: ../View/Home');
        }
    }
?>
