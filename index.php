<?php
require_once 'Profesor.php';
require_once 'Pedido.php';

$u = new Profesor();
$a = new Profesor();

echo $u->nombre;
$a->nombre="Juanjo";

$p = new Pedido('martillo',5);
$x = $p;

$u->ingresarPedido($p);
$u->ingresarPedido(new Pedido('dest',5));
$u->ingresarPedido(new Pedido('regla',5));
$u->ingresarPedido(new Pedido('afs',5));
$u->ingresarPedido(new Pedido('sad',5));

$u->pedido[0]->herramienta = "alicate";

$a->ingresarPedido($p);

foreach ($u->pedido as $pedi){
    echo $pedi->herramienta;
}
echo '<br>';
foreach ($a->pedido as $pedi){
    echo $pedi->herramienta;
}
?>