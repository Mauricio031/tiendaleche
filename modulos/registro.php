<?php
if(isset($enviar)){
  $username = clear($username);
  $password = clear($password);
  $name = clear($name);
  $correo = clear($correo);
  $pago = clear($pago);

  $q = $mysqli->query("INSERT INTO clientes (username,password,name,correo,pago) VALUES ('$username','$password','$name','$correo','$pago')");
  alert("Usuario registrado");
  redir("?p=login");
  }
?>

<center>
<div id="frmRegistration">
<form class="form-horizontal" action="" method="POST">
	<h1>User Registration</h1>
  <div class="form-group">
    <label class="control-label col-sm-2" for="username">Usuario:</label>
    <div class="col-sm-6">
      <input required type="text" name="username" class="form-control" id="username" placeholder="Enter username">
    </div>
  </div>
	<div class="form-group">
    <label class="control-label col-sm-2" for="name">First Name:</label>
    <div class="col-sm-6">
      <input required type="text" name="name" class="form-control" id="name" placeholder="Enter name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="correo">Email:</label>
    <div class="col-sm-6">
      <input required type="email" name="correo" class="form-control" id="correo" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-6"> 
      <input required type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pago">Metodo de pago</label>

    <select name="pago">
      <option value="Tarjeta de debito">Tarjeta de credito</option>
      <option value="Credito">Credito</option>
      <option value="Paypal">Paypal</option>
    </select>
    
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="enviar" class="btn btn-primary">Submit</button>
    </div>
  </div>
  
</form>
</div>
</center>