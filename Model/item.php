<?php

    class Item{
        private $idItem;
        private $nome;
        private $descricao;
        private $arquivo;

        public function setIdItem($idItem){$this->idItem = $idItem;}
        public function setNome($nome){$this->nome = $nome;}
        public function setDescricao($descricao){$this->descricao = $descricao;}
        public function setArquivo($arquivo){$this->arquivo = $arquivo;}

        public function getIdItem(){return $this->idItem;}
        public function getNome(){return $this->nome;}
        public function getDescricao(){return $this->descricao;}
        public function getArquivo(){return $this->arquivo;}
    }

?>