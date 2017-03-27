<?php

include 'includes/header.php';
include 'classes/ClassTrabajo.php';

/*
CONTENIDO
*/

echo "<h1>Investigacion PHP</h1>";

$trabajo = new Trabajo();
$trabajo->mostrar("Ejemplo Metodo POST");
if(empty($_POST['name'])) {
	?>

	<form action="index.php" method="post">
		Nombre: <input type="text" name="name"><br>
		E-mail: <input type="text" name="email"><br>
		<input type="submit">
	</form>

	<?
} else{
	?>
		Bienvenido <?php echo $_POST["name"]; ?><br>
		Su e-mail es: <?php echo $_POST["email"]; ?>	
	<?
}


$trabajo->mostrar("Ejemplo Metodo GET");
if(empty($_GET)) {
	?>

	<form action="index.php" method="GET">
		Nombre: <input type="text" name="name"><br>
		E-mail: <input type="text" name="email"><br>
		<input type="submit">
	</form>

	<?
} else{
	?>
		Bienvenido <?php echo $_GET["name"]; ?><br>
		Su e-mail es: <?php echo $_GET["email"]; ?>	
	<?
}
/*
FINALIZAR CONTENIDO
*/

include 'includes/footer.php';

?>

