<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }
	label{
		font-family: "Roboto", sans-serif;
  outline: 0;
  
  width: 25%;
  border: 0;
  margin: 0 0 15px;
  
  box-sizing: border-box;
  font-size: 30px;
	}
	.txt{
	font-family: "Roboto", sans-serif;
  outline: 0;
  width: 25%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 30px;
	}
	.btn{
	font-family: "Roboto", sans-serif;
  outline: 0;
  background: #467BF7;
  width: 25%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 30px;
	}
	body{
		background-image: url(https://www.fondoshd.mx/descargar.php?id=797&resolucion=1920x1080);
		
		background-size: 100% 100%;
		background-attachment: fixed;
		align-self: center;
	}
	div{
  text-align: center;
		}
	
	input[type="text"]{

		background: transparent;
    border: none;


	}
	label{
		color: #F0E109;
		
	}
	</style>
	
</head>
<body  >
<div id="container">
		<img src="http://prueb.website/rt.png">

		<form method="post" action="index.php/usuarioController/Ingresar">
			
		<label>Nombre</label><br>
		
		<input  class="txt" type="text" id="Usuario" name="Usuario" placeholder="Ingrese su Usuario"><br>
		<label>Contraseña</label><br>
		<input class="txt" type="text" id="Contrasena" name="Contrasena" placeholder="Ingrese su Contraseña"><br>
		<input class="btn" type="submit" id="Consultar" name="datosUsuario"><br>
		<br>
		<br>
		
		
	</form>
	<form method="post" action="index.php/usuarioController/Registrarmev">
		<a href="index.php/usuarioController/Registrarmev">Registrarme</a>
	</form>
	</div>

	
</div>

</body>
</html>