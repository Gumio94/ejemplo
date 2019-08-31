<?php
//Como esta clase hereda de la clase "Usuario" necesita el archivo
require_once 'Usuario.php';

//Crea la clase y la define como una extencion de Usuario
class Profesor extends Usuario{
    //crea los atributos
    public $pedido;
    private $edad;

    //define el constructor
    public function __construct() {
        //como hereda los atributos y metodos de Usuario, los toma como propios y pone por defecto "Pep"
        $this->nombre = "pep";
        
        //define a pedidos como un arreglo
        $this->pedido = [];
    }
    
    /*metodo para poner la edad al profesor
     * parametro:
     * $fecha: fecha de nacimiento (formato: YYYY-mm-dd)
     */
    public function setEdad($fecha){
        //crea un objeto de la clase DataTime y le pone la fecha del usuario
        $cumpleanios = new DateTime($fecha);
        //crea un objeto de la clase DataTime y se genera con la fecha actual
        $hoy = new DateTime();
        
        //compara la diferencia de dias, meses y años entre la actual y la de nacimiento
        $anios = $hoy->diff($cumpleanios);
        
        //muestra de la diferencia solo los años 
        $this->edad = $anios->y;
    }
    
    //metodo para devolver la edad
    public function getEdad(){
        return $this->edad;
    }
    
    /*Metodo para ingresar un pedido al profesor
     * parametro:
     * $pedido: objeto de la clase Pedido
     */
    public function ingresarPedido($pedido){
        //inserta ese objeto en la siguiente posicion disponible
        $this->pedido[]= $pedido;
    }
}
