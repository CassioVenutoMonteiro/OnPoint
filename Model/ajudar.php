<?php

    class Ajudar{
        private $idAjuda;
        private $dt;
        private $receptor;
        private $emissor;
        private $idLook;

        public function setIdAjuda($idAjuda){$this->idAjuda = $idAjuda;}
        public function setDt($dt){$this->dt = $dt;}
        public function setReceptor($receptor){$this->receptor = $receptor;}
        public function setEmissor($emissor){$this->emissor = $emissor;}
        public function setIdLook($idLook){$this->idLook = $idLook;}
        
        public function getIdAjuda($idAjuda){return $this->idAjuda;}
        public function getDt($dt){return $this->dt;}
        public function getReceptor($receptor){return $this->receptor;}
        public function getEmissor($emissor){return $this->emissor;}
        public function getIdLook($idLook){return $this->idLook;}
    }

?>