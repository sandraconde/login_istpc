<?php 
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js
"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
	<div class="container" >
		
	
	<div class="row pink lighten-4">
		<div class="col s8 l12 m6">
			<div class ="card">
				<div class="card-title">
					<b>	<center><h4>BIENVENIDOS A MI LOGIN</h4></center></b>
				</div>
				<div class="card-content">
					<form action="login/login.php" method="POST" accep-charset ="utf-8">
						<input type="text" name="usuario" value="" placeholder="Ingrese su usuario"requerid>
						<label for="usuario"></label>
						<input type="password" name="contra" value="" placeholder="Ingrese su Contraseña" requerid	>	
						<label for="contra"></label>
						<center>
						<button class="btn-floating btn-large waves-effect waves-light blue" type="submit"><i class="material-icons">check</i></button>
							<button class="btn-floating btn-large waves-effect waves-light red" type="cancel"><i class="material-icons">clear</i></button></center>
					</form>

				</div>
				<div class="card-footer">
					<center>
				<a href="#" title="" class="text-red" >¿olvido su contraseña?</a><br>
				<a href="#" title="" class="text-blue">Crear Cuenta</a></center>
			</div>
			</div>
			
		</div>
	</div>
</body>
</html>