<?php 

require_once '../php/class/freelancer.class.php';


$email=$_POST['email'];
$senha=$_POST['senha'];

$freela=new freelancer();

$freela->setEmail($email);
$freela->setSenha($senha);
$busca=$freela->login();

$idfreelancer=$busca['idfreelancer'];



session_start();
$_SESSION['idfreelancer'] = $idfreelancer;

header("location:index.php");

?>