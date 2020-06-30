<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>
<H1>Registrarme</H1>
<div id="container">
		<form method="post" action="http://localhost/code/index.php/usuarioController/RegistrarUsuario">
		<label>Nombre</label><br>
		<input class="txt" type="text" id="Nombre" name="Nombre" placeholder="Ingrese su Nombre"><br>
		<label>Apellidos</label><br>
		<input class="txt" type="text" id="Apellidos" name="Apellidos" placeholder="Ingrese sus Apellidos"><br>
		<label>Usuario</label><br>
		<input class="txt" type="text" id="Usuario" name="Usuario" placeholder="Ingrese un Usuario"><br>
		<label>Contraseña</label><br>
		<input class="txt" type="text" id="Contrasena" name="Contrasena" placeholder="Ingrese una Contraseña"><br>
		<label>Email</label><br>
		<input class="txt" type="text" id="Email" name="Email" placeholder="Ingrese su Email"><br>

		<input class="btn" type="submit" id="Consultar" name="datosUsuario2"><br>
	</form>
	</div>
</div>
</body>
</html>