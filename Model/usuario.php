<?php

    class Usuario{

        private $idUsuario;
        private $nome;
        private $senha;
        private $email;
        private $arquivo;

        public function setIdUsuario($idUsuario){$this->idUsuario = $idUsuario;}
        public function setNome($nome){$this->nome = $nome;}
        public function setSenha($senha){$this->senha = $senha;}
        public function setEmail($email){$this->email = $email;}
        public function setArquivo($arquivo){$this->arquivo = $arquivo;}

        public function getIdUsuario(){return $this->idUsuario;}
        public function getNome(){return $this->nome;}
        public function getSenha(){return $this->senha;}
        public function getEmail(){return $this->email;}
        public function getArquivo(){return $this->arquivo;}
    }

?>