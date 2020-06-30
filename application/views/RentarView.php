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
<div>
	<form method="post" action="http://localhost/code/index.php/usuarioController/Cobrar">
	<img src="http://prueb.website/rt.png">
	<img src="<?= $n1[0]->Imagen;?>" width="400" height="700" hspace="5" vspace="5" style="float: left;" >
	
	<h3>ID:</h3>
	<input class="txt" type="text" name="id" id="id" value="<?= $n1[0]->idPelicula;?> "/>
	<h3>Nombre:</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $n1[0]->NomPelicula;?> "/>
	<h3>Director:</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $n1[0]->Director;?>"/>
	<h3>Fecha de Estreno</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $n1[0]->Fecha;?>"/>
	<h3>Fecha Solicitada</h3>
	<input type="date" name="FS" id="FS">
	<h3>Fecha de Regreso</h3>
	<input type="date" name="FR" id="FR">
	<h3>Precio por Dia:</h3>
	<input class="txt" type="text" name="id_txt" id="id_txt" value="<?= $n1[0]->Costo;?>"/><br>

	<input class="btn" type="submit" id="Consultar" name="datosUsuario2" value="Confirmar"/>
	</form>
	</div>
</body>
</html>