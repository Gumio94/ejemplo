<?php

class Pedido {
    public $herramienta;
    public $cantidad;
    
    public function __construct($h,$c) {
        $this->cantidad = $c;
        $this->herramienta = $h;
    }
}
