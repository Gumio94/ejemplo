<?php
//crea la clase 
class Pedido {
    //crea los atributos
    public $herramienta;
    public $cantidad;
    
    /*constructor con 2 parametros
     * parametros:
     * $h: nombre de la herramienta
     * $c: cantidad de la herramienta
     */
    public function __construct($h,$c) {
        //guardan los parametros dentro de los atributos
        $this->cantidad = $c;
        $this->herramienta = $h;
    }
}
