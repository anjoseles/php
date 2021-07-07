<?php

/*
$anoNascimento = 1999;

$nomeCompleto = "";*/
//Na linha de baixo temos uma variável com númerono nome

$nome1 = "João";

$sobrenome = "Rangel";

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

exit;

echo $nome1;

echo "<br/>";

unset($nome1); // limpar variável

if (isset($nome1)) {

    echo $nome1;

}

?>