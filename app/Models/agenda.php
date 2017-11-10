<?php
class Agenda{
    public $conexao;
    public $agenda = array();

    public function __constructor($nova_conexao){
        $this->conexao = $nova_conexao;
    }
}