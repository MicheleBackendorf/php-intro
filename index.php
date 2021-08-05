<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
//print_r($categorias);

$nome = 'Eduardo';
$idade = 50;

//var_dump($nome);
//var_dump($idade);

if ($idade >= 6 && $idade <= 12) {
	foreach ($categorias as $i => $item) {
		if ($categorias[$i] == 'infantil') {
			echo 'O nadador ' .$nome. ' compete na categoria infantil';
		}
	}
}else if ($idade >= 13 && $idade <= 18) {
	foreach ($categorias as $i => $item) {
		if ($categorias[$i] == 'adolescente') {
			echo 'O nadador ' .$nome. ' compete na categoria adolescente';
		}
	}
}else{
	foreach ($categorias as $i => $item) {
		if ($categorias[$i] == 'adulto') {
			echo 'O nadador ' .$nome. ' compete na categoria adulto';
		}
	}
}	