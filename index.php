<?php

include 'includes/header.php';
include 'classes/ClassTrabajo.php';

/*
CONTENIDO
*/

echo "<h1>Investigacion PHP</h1>";

$trabajo = new Trabajo();
$trabajo->mostrar("PRUEBA");

/*
FINALIZAR CONTENIDO
*/

include 'includes/footer.php';

?>