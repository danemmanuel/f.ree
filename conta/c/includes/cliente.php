<?php 
require_once '../php/class/cliente.class.php';

$cliente=new cliente();
$idcliente=$_SESSION['idcliente'];
$cliente->setId($idcliente);
$result = $cliente->buscarId();

$nomecliente=$result['nome'];
$email=$result['email'];
$telefone=$result['telefone'];
$datanascimento=$result['datanascimento'];
$sexo=$result['sexo'];


$datanova = date("d-m-Y", strtotime($datanascimento));


?>