<?php
require_once 'Usuario.php';

class Profesor extends Usuario{
    public $pedido;
    private $eda;

    public function __construct() {
        $this->nombre = "pep";
        $this->pedido = [];
    }
    
    public function setEdad($e){
        
    }
    
    public function getEdad(){
        
    }
    
    public function ingresarPedido($pedido){
        $this->pedido[]= $pedido;
    }
}
