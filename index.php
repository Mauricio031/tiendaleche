<?php
include "configs/config.php";
include "configs/funciones.php";
	
if(!isset($p)){
	$p = "principal";
}else{
	$p = $p;
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	
	<link rel="stylesheet" href="css/estilo.css"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" href="fontawesome/css/all.css"/>
	<link rel="shortcut icon" href="logo\header.png">
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="fontawesome/js/all.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/app.js"></script>

	<title>¡La lechiiii!</title>
</head>
<body>
	
	<div class="header">
		¡La lechiiii!
		<p><img src="logo\logo2.png" alt="Logotipo de la Lechiiii" title="Logotipo creado por Mauricio Rdz." width="400"></p>
		<i>Leche fresca cada mañana | Desde 1942</i>
	</div>
	<div class="menu">
		<a href="?p=registro">Registrar</a>
		<a href="?p=principal">Principal</a>
		<a href="?p=productos">Productos</a>
		<a href="?p=ofertas">Ofertas</a>
		<a href="?p=carrito">Carrito</a>
		<a href="?p=miscompras">Mis Compras</a>
		<a href="?p=admin">Administrador</a>
		

		<?php
			if(isset($_SESSION['id_cliente'])){
		?>

		<a class="pull-right subir" href="?p=salir">Salir</a>
		<a class="pull-right subir" href="#"><?=nombre_cliente($_SESSION['id_cliente'])?></a>

		<?php
			}
		?>
	</div>
	<div class="cuerpo">
		<?php
			if(file_exists("modulos/".$p.".php")){
				include "modulos/".$p.".php";
			}else{
				echo "<i>No se ha encontrado el modulo <b>".$p."</b> <a href='./'>Regresar</a></i>";
			}
		?>
	</div>

	<div class="footer">
		<footer>
			<table>
				<tr>
					<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>

					<td>CONTACTO<ul></ul><b>GANADERIA LECHIIII, S.A.,</b><ul></ul>San Pancho de Asis<ul></ul>66366 Villanueva del Pardo<ul></ul>Mexico. Nuevo Leon<ul></ul>Ph. +52 8118 9988 17<ul></ul>Email. mauricioaxelra@gmail.com</td>

					<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
					<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
							
					<td>ULTIMAS PUBLICACIONES<ul></ul><ul></ul><ul></ul><b>Gelatina de leche con higos</b><ul></ul>28 septiembre, 2018<ul></ul><b>Polos cremosos de chocolate</b><ul></ul>23 julio, 2018<ul></ul><b>Pastel de leche arrugado o “Galatopita”</b><ul></ul>20 junio, 2018
					</td>

					<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
					<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>

					<!--https://www.instagram.com/axelrdz01/ -->
					<td><a href="https://www.instagram.com/axelrdz01/">INSTAGRAM</a><ul></ul><img src="logo\Insta.png" width="350"></td>

					<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
					<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>

					<!--https://www.facebook.com/MauricioRodri100 -->	
					<td><a href="https://www.facebook.com/MauricioRodri100">FACEBOOK</a><ul></ul><img src="logo\Face.png" width="600"></td>
				</tr>
			</table>
		</footer>
		<table>
			<tr><ul></ul></tr>
			<tr><td><ul></ul></td></tr>
		</table>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
		<div class="header0">
			Contacto: <a href="#">mauricioaxelra@gmail.com</a> | Tel. 8118998817
		</div>
		<p>Copyright Mauricio Rdz. &copy; <?=date("Y")?></p>
	</div>

</body>
</html>