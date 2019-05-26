<html>
	<head>
		<!--
			Este es un ejemplo funcionando de como hacer la "conexion"
			a otra aplicacion. Cabe mencionar que otras aplicaiones ocuparan
			mas o menos campos segun sea la situacion. Este es el ejemplo
			de como hacer un pago al banco.
		-->
	</head>
	<body>
		<form method="POST" action="http://bankfcfm.herokuapp.com/transfer" >
			<table>
				<tr>
					<!--
						Este campo es dado, no lo ingresa el usuario, 
						en produccion lo esconden con type="hidden"
						y le dan un valor con value=""
						es la cuent a donde depositar
					-->
					<td><label>Account Number</label></td>
					<td><input name="account_number" type="number" ></td>
				</tr>
				
				<tr>
					<!-- Estos son los datos de la tarjeta del usuario que pagara -->
					<td><label>Cardholder</label></td>
					<td><input name="card_name" type="text" ></td>
				</tr>
				
				<tr>
					<td><label>Card Number</label></td>
					<td><input name="card_number" type="number" ></td>
				</tr>
				
				<tr>
					<td><label>CVV</label></td>
					<td><input name="cvv" type="number" ></td>
				</tr>
				
				<tr>
					<td><label>Total Amount</label></td>
					<td><input name="amount" type="number" min="0" step="0.01" ></td>
				</tr>
				
				<tr>
					<!--
						Este campo es dado, no lo ingresa el usuario, 
						en produccion lo esconden con type="hidden"
						y le dan un valor con value=""
					-->
					<td><label>Description</label></td>
					<td><input name="description" type="text" ></td>
				</tr>
				
				<tr>
					<!-- Este campo es dado y fijo, no modificar -->
					<td><label></label>
					<td><input name="transfer_type" type="hidden" value="payment" ></input>
				</tr>
				<tr>
					<td><label></label>
					<td><input type="submit" value="Pay" ></input>
				</tr>
			</table>
		</form>
	</body>
</html>
