<?php 

require_once '../class/cliente.class.php';

$cliente= new cliente();

$idcliente=$_POST['idcliente'];
$nomecliente=$_POST['nomecliente'];
$emailcliente=$_POST['emailcliente'];
$datanascimento=$_POST['datanascimento'];
$sexo=$_POST['sexo'];
$telefone=$_POST['telefone'];

$datanova = date("Y-m-d", strtotime($datanascimento));

$cliente->setId($idcliente);
$cliente->setNome($nomecliente);
$cliente->setEmail($emailcliente);
$cliente->setDatanascimento($datanova);
$cliente->setSexo($sexo);
$cliente->setTelefone($telefone);
$cliente->alterarcliente();

header("location:../../c");



?>