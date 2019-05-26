<?php
$cliente=$_SESSION['id_cliente'];
$monto1 = $mysqli -> query("SELECT * FROM compra WHERE id_cliente = '$cliente'");
while($r1=mysqli_fetch_array($monto1)){
	$monto = $r1['monto'];
}

$correo1 = $mysqli->query("SELECT * FROM clientes WHERE id = '$cliente'");
while($r2=mysqli_fetch_array($correo1)){
	$nombre=$r2['name'];
	$email=$r2['correo'];
	$mensaje = "Querido: $nombre \n La compra de su producto ha sido finalizada con un monto total de: $$monto";
	}

mail($email, "Tienda la Lechiiii", $mensaje);

alert ("Su compra ha finalizado");
?>

