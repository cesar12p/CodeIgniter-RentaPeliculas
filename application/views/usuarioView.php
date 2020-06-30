<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }
	body{
		background-color: #4BF068;
		position: center;
		background-image: url(https://image.freepik.com/foto-gratis/humo-extiende-sobre-fondo-azul_23-2147785936.jpg);
		background-size: 100% 100%;
		background-attachment: fixed;
		align-self: center;
		
	}
	.txt{
		font-size: 25px;
		text-align: center;
		color: white;


	}
	input[type="text"]
{
    background: transparent;
    border: none;
}
h3{
	color: white;
}
h1{
	text-align: center;
	color: white;
}
img{
	display:block;
margin:auto;

}
.btn{
	 font-size:30px;
}
</style>
</head>
<body>
	<img src="http://prueb.website/rt.png">
	<?php
	session_start();
	ob_start();
	$_SESSION['ho']=$idu[0]->idUsuario;
	$_SESSION['ho1']=$idu[0]->Usuario;
	$_SESSION['ho2']=$idu[0]->Contrasena;
	echo $idu[0]->idUsuario;
	echo $idu[0]->Usuario;
	echo $idu[0]->Contrasena;
	  ?>
	 <form method="post" action="http://localhost/code/index.php/usuarioController/verHistorial">
	<input class="btn" type="submit" id="Consultar" name="datosUsuario2" value="Ver Historial">
	</form>
	<div>
	<h1>Estrenos</h1>
	<img src="<?= $peli[0]->Imagen;?>" width="300" height="400" hspace="5" vspace="5" style="float: left;" >
	<h3>Nombre:</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[0]->NomPelicula;?>"/>
	<h3>Director:</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[0]->Director;?>"/>
	<h3>Precio:</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[0]->Costo;?>"/>
	<h3>Fecha</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[0]->Fecha;?>"/>
	<form method="post" action="http://localhost/code/index.php/usuarioController/Rentar1">
	<input class="btn" type="submit" id="Consultar" name="datosUsuario2" value="Rentar">
	</form>
	</div>
	<br>
	<br>
	<br>
	<br>
	<div>
	<img src="<?= $peli[1]->Imagen;?>" width="300" height="400" hspace="5" vspace="5" style="float: left;" >
	<h3>Nombre:</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[1]->NomPelicula;?>"/>
	<h3>Director:</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[1]->Director;?>"/>
	<h3>Precio:</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[1]->Costo;?>"/>
	<h3>Fecha</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[1]->Fecha;?>"/>
	<form method="post" action="http://localhost/code/index.php/usuarioController/Rentar2">
	<input class="btn" type="submit" id="Consultar" name="datosUsuario2" value="Rentar">
	</form>
	</div>
	<br>
	<br>
	<br>
	<br>
	<div>
	<img src="<?= $peli[2]->Imagen;?>" width="300" height="400" hspace="5" vspace="5" style="float: left;" >
	<h3>Nombre:</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[2]->NomPelicula;?>"/>
	<h3>Director:</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[2]->Director;?>"/>
	<h3>Precio:</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[2]->Costo;?>"/>
	<h3>Fecha</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[2]->Fecha;?>"/>
		<form method="post" action="http://localhost/code/index.php/usuarioController/Rentar3">
	<input class="btn" type="submit" id="Consultar" name="datosUsuario2" value="Rentar">
	</form>
	</div>
	<br>
	<br>
	<br>
	<br>
	<div>
	<img src="<?= $peli[3]->Imagen;?>" width="300" height="400" hspace="5" vspace="5" style="float: left;" >
	<h3>Nombre:</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[3]->NomPelicula;?>"/>
	<h3>Director:</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[3]->Director;?>"/>
	<h3>Precio:</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[3]->Costo;?>"/>
	<h3>Fecha</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[3]->Fecha;?>"/>
		<form method="post" action="http://localhost/code/index.php/usuarioController/Rentar4">
	<input class="btn" type="submit" id="Consultar" name="datosUsuario2" value="Rentar">
	</form>
	</div>
	<br>
	<br>
	<br>
	<br>
	<div>
	<img src="<?= $peli[4]->Imagen;?>" width="300" height="400" hspace="5" vspace="5" style="float: left;" >
	<h3>Nombre:</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[4]->NomPelicula;?>"/>
	<h3>Director:</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[4]->Director;?>"/>
	<h3>Precio:</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[4]->Costo;?>"/>
	<h3>Fecha</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[4]->Fecha;?>"/>
		<form method="post" action="http://localhost/code/index.php/usuarioController/Rentar5">
	<input class="btn" type="submit" id="Consultar" name="datosUsuario2" value="Rentar">
	</form>
	</div>
	<br>
	<br>
	<br>
	<br>
	<div>
	<img src="<?= $peli[5]->Imagen;?>" width="300" height="400" hspace="5" vspace="5" style="float: left;" >
	<h3>Nombre:</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[5]->NomPelicula;?>"/>
	<h3>Director:</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[5]->Director;?>"/>
	<h3>Precio:</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[5]->Costo;?>"/>
	<h3>Fecha</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[5]->Fecha;?>"/>
		<form method="post" action="http://localhost/code/index.php/usuarioController/Rentar6">
	<input class="btn" type="submit" id="Consultar" name="datosUsuario2" value="Rentar">
	</form>
	</div>
	<br>
	<br>
	<br>
	<br>
	<div>
	<img src="<?= $peli[6]->Imagen;?>" width="300" height="400" hspace="5" vspace="5" style="float: left;" >
	<h3>Nombre:</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[6]->NomPelicula;?>"/>
	<h3>Director:</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[6]->Director;?>"/>
	<h3>Precio:</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[6]->Costo;?>"/>
	<h3>Fecha</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $peli[6]->Fecha;?>"/>
		<form method="post" action="http://localhost/code/index.php/usuarioController/Rentar7">
	<input class="btn" type="submit" id="Consultar" name="datosUsuario2" value="Rentar">
	</form>
	</div>
</body>
</html>	