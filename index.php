<?php
//trae los archivos de las clases
require_once 'Profesor.php';
require_once 'Pedido.php';

//crea 2 objetos de la clase Profesor
$u = new Profesor();
$a = new Profesor();

//modifica el nombre de un profe
$a->nombre="Juanjo";

//crea un objeto de la clase pedido
$p = new Pedido('martillo',5);

//guarda por "referencia" el pedido dentro de los pedidos del profesor 
$u->ingresarPedido($p);
//guarda por "valor" los pedidos del profesor.
$u->ingresarPedido(new Pedido('destornillador',5));
$u->ingresarPedido(new Pedido('regla',5));
$u->ingresarPedido(new Pedido('escofina',5));
$u->ingresarPedido(new Pedido('serrucho',5));
//guarda por "referencia" el pedido dentro de los pedidos del otro profesor 
$a->ingresarPedido($p);

//modifica nombre de herramienta del primer pedido del profesor 
$u->pedido[0]->herramienta = "alicate";

/*
 * Como una de las herramientas (la de la primer posicion) 
 * se la pasaron por referencia, cuando se modifique en alguna, 
 * cambia en ambas
 */

//muestra el nombre de uno
echo $u->nombre. ":<br>";
//recorre el arreglo pedido del profesor y lo va guardando en "pedi"
foreach ($u->pedido as $pedi){
    echo $pedi->herramienta . "<br>";
}
echo '<br>';

//muestra el nombre del otro
echo $a->nombre. ":<br>";
//recorre el arreglo pedido del otro profesor y lo va guardando en "pedi"
foreach ($a->pedido as $pedi){
    echo $pedi->herramienta. "<br>";
}
?>