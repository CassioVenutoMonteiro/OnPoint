<?php

    class Look{
        private $idLook;
        private $nome;
        private $publico;
        private $evento;
        private $estilo;
        private $horario;
        private $clima;
        private $descricao;

        public function setIdLook($idLook){$this->idLook = $idLook;}
        public function setNome($nome){$this->nome = $nome;}
        public function setPublico($publico){$this->publico = $publico;}
        public function setEvento($evento){$this->evento = $evento;}
        public function setEstilo($estilo){$this->estilo = $estilo;}
        public function setHorario($horario){$this->horario = $horario;}
        public function setClima($clima){$this->clima = $clima;}
        public function setDescricao($descricao){$this->descricao = $descricao;}
        
        public function getIdLook($idLook){return $this->idLook;}
        public function getNome($nome){return $this->nome;}
        public function getPublico($publico){return $this->publico;}
        public function getEvento($evento){return $this->evento;}
        public function getEstilo($estilo){return $this->estilo;}
        public function getHorario($horario){return $this->horario;}
        public function getClima($clima){return $this->clima;}
        public function getDescricao($descricao){return $this->descricao;}
    }

?>