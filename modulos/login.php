<?php
if(isset($_SESSION['id_cliente'])){
	redir("./");
}
	
if(isset($enviar)){
	$username = clear($username);
	$password = clear($password);

	$q = $mysqli->query("SELECT * FROM clientes WHERE username = '$username' AND password = '$password'");

	if(mysqli_num_rows($q)>0){
		$r = mysqli_fetch_array($q);
		$_SESSION['id_cliente'] = $r['id'];
		if(isset($return)){
			redir("?p=".$return);
		}else{
			redir("./");
		}
	}else{
		alert("Los datos no son validos");
		redir("?p=login");
	}


}

if(isset($Admin)){
	redir("?p=admin");
}
	?>


	<center>
		<form method="post" action="">
			<div class="centrar_login">
				<label><h2><i class="fa fa-key"></i> Iniciar Sesión</h2></label>
				<div class="button-admin">
					<button class="btn btn-submit" name="Admin" type="submit"><i class="fa fa-sign-in-alt	"></i> ¿Eres Administrador?</button>
				</div>
				<div class="form-group">
					<input required type="text" autocomplete="off" class="form-control" placeholder="Usuario" name="username"/>
				</div>

				<div class="form-group">
					<input required type="password" class="form-control" placeholder="Contraseña" name="password"/>
				</div>

				<div class="form-group">
					<button name="enviar" type="submit"><i class="fa fa-sign-in-alt"></i> Ingresar</button>
				</div>
			</div>
		</form>
	</center>