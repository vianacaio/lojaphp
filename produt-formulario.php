<?php include("cabecalho.php")?>
				<h1>Formulario de Produto</h1>
	<form action="adiciona-produto.php">
		<table class="table">
		<tr>
			<td>Nome:</td>
			<td><input class ="form-control" type="text" name="nome"></br></td>
		</tr>
		
		<tr>
			<td>Preco:</td>
			<td><input class ="form-control" type="number" name="preco"></br></td>
		</tr>
		<tr>
			<td><input class="btn btn-primary center-block"  type="submit"  value="Cadastrar"></td>	
		</tr>	
		</table>
	</form>
	<?php include("rodape.php")?>