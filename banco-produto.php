<?php
function listaProdutos($conexao) {
	
	$produtos =	array();
	$resultado = mysqli_query($conexao, "select * from produtos");

	while($produto = mysqli_fetch_assoc($resultado)) {
				 
			array_push($produtos, $produto);
	}

	return $produtos;

}


function insereProduto($conexao, $nome, $preco) {
	
	$query = "INSERT INTO PRODUTOS (nome, preco) values ('{$nome}', {$preco})";
		return mysqli_query($conexao, $query);
	
}

