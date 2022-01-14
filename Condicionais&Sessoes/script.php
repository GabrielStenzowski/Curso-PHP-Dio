<?php

	$categorias = [];
	$categorias [] = 'Infaltil';
	$categorias [] = 'Adoslecente';
	$categorias [] = 'Adulto';
	$categorias [] = 'Idoso';

	$nome = $_POST['nome'];
	$idade = $_POST['idade'];

	if (strlen($nome) <= 3)
	{
		echo 'O nome deve conter mais de que 3 caracteres!!';
	}
	
	else if ($idade >= 0 && $idade <= 12) 
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