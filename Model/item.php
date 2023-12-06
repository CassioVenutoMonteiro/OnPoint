<?php

    class Item{
        private $idItem;
        private $nome;
        private $tipo;
        private $evento;
        private $cor;
        private $arquivo;
        private $usuario;

        public function setIdItem($idItem){$this->idItem = $idItem;}
        public function setNome($nome){$this->nome = $nome;}
        public function setTipo($tipo){$this->tipo = $tipo;}
        public function setEvento($evento){$this->evento = $evento;}
        public function setCor($cor){$this->cor = $cor;}
        public function setArquivo($arquivo){$this->arquivo = $arquivo;}
        public function setUsuario($usuario){$this->usuario = $usuario;}

        public function getIdItem(){return $this->idItem;}
        public function getNome(){return $this->nome;}
        public function getTipo(){return $this->tipo;}
        public function getEvento(){return $this->evento;}
        public function getCor(){return $this->cor;}
        public function getArquivo(){return $this->arquivo;}
        public function getUsuario(){return $this->usuario;}
    }

?>