<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }
	table{
		border: 5px solid black;
		
margin:auto;
	}
	td{
		border: 5px solid black;
		 background: transparent;
		color: white;
	}
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
	<table class="t">

  <tr>

    <td>Nombre</td>

    <td>Nombre Pelicula</td>

    <td>Fecha de Entraga</td>

    <td>Fecha de Regreso</td>


  </tr>

<?php foreach ($datos as $i => $c): ?>
		
			<tr>

    <td> <?=$c->usuario;?></td>

    <td><?=$c->NomPelicula;?></td>

    <td><?=$c->FechaEntrega;?></td>

    <td><?=$c->FechaRegreso;?></td>

  </tr>
 <?php endforeach;?>
 </table>
 <form method="post" action="http://localhost/code/index.php/usuarioController/Ingresar">
	<input class="btn" type="submit" id="Consultar" name="datosUsuario2" value="Regresar">
	</form>
</body>
</html>