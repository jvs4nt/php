<?php
include("conexao.php");
 $nome=$_POST["nome"];
 $tel=$_POST["tel"];
 $email=$_POST["email"];
 $qpet1=$_POST["qpet1"];
 $qpet2=$_POST["qpet2"];



if(isset($_POST["pet1"]))
{
	$pet1=$_POST["pet1"];
}
else
{
	$pet1=0;
}

if(isset($_POST["pet2"]))
{
	$pet2=$_POST["pet2"];
}
else
{
	$pet2=0;
}

mysqli_query($conexao,"insert into contato(nome,telefone,email,pet1,qpet1,pet2,qpet2) values ('$nome','$tel','$email','$pet1','$qpet1','$pet2','$qpet2')");





?>