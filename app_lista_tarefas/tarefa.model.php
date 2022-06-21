<?php

    class Tarefa{
        private $id;
        private $id_status;
        private $tarefa;
        private $data_cadastro;

        public function __get($attbr){
            return $this->$attbr;
        }
        
        public function __set($attbr, $val){
            $this->$attbr = $val;
            return $this;
        }



    }



?>