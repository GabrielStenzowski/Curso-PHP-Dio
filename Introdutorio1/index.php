<?php
	
	$categorias = [];
	$categorias [] = 'Infaltil';
	$categorias [] = 'Adoslecente';
	$categorias [] = 'Adulto';
	$categorias [] = 'Idoso';
	//print_r($categorias);

	$nome = 'Gabriel';
	$idade = 9;

	//var_dump($nome);
	//var_dump($idade);

	//Metodo 1, atraves de 'ECHOS'.
	if ($idade >= 6 && $idade <= 12) 
	{
		echo 'O nadador ' .$nome. ', compete na categoria Infaltil!';
	}
	
	else if ($idade >= 13 && $idade <= 18)
	{
		echo 'O nadador ' .$nome. ', compete na categoria Adoslecente!';
	}
	else
	{
		echo 'O nadador ' .$nome. ', compete na categorias Adulto!';
	}
	

	

?>