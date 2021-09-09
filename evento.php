<?php
$nome=$_POST["nome"];
$idade=$_POST["idade"];



echo "Nome: $nome<br><br>";
echo "Idade: $idade<br><br>";


if ($idade > 21) {

	echo "você foi autorizado a entrar no evento, entre em contato com os organizadores para comprar seu ingresso.";
}
elseif ($idade <= 21) {

	echo "desculpe, não podemos te autorizar no evento, a idade mínima é 22 anos";

}


?>