<?php 
include '../conexion/conexion.php';
$usu = htmlentities($_POST['usuario']);
$contrase = htmlentities($_POST['contra']);

/*

$cantidadletras=strlen($usu);
$cantidadcontra=strlen($contrase);
*/
$sel=$con->query("SELECT * FROM usuario WHERE usuario=$usu' and contra=$contrase'");
$row = mysqli_num_rows($sel);
if ($row==1) {

header('Location:../extend/alerta.php?mensaje=BUENA CONTRASEÑA&tipo=Bien&estado=success');

	# code...
	}else{
		
 	header('Location:../extend/alerta.php?mensaje=MALA CONTRASEÑA&tipo=Mal&estado=error');
 }


?>