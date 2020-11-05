<?php 
//recepcionar datos enviados
$msg = htmlentities($_GET['mensaje']);
$tip = htmlentities($_GET['tipo']);
$estado = htmlentities($_GET['estado']);
$url="";
//CONDICION REDIRECCIONANDO PAGINAS
if ($estado=="success") {
	$url="header.php";
	# code...
	 }else{
	 	$url="../login/salir.php";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<!--insertando cdn de la alerta-->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>
<body>
	<!--configurrar la alerta-->
	<script>
		Swal.fire({
  icon: '<?php echo $estado; ?>',
  title: '<?php echo $tip; ?>',
  text: '<?php echo $msg; ?>',
}).then(function(){
	location.href='<?php echo $url; ?>'

});
	</script>
</body>
</html>