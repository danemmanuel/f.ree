<?php 
require_once '../class/freelancer.class.php';
header("location:../../freelancer/alterarsenha.php");

$idfreelancer=$_POST['idfreelancer'];
$senhaantiga=$_POST['antigasenha'];
$novasenha=$_POST['novasenha'];

$freelancer = new freelancer();
$freelancer->setId($idfreelancer);
$freelancer->setSenha($novasenha);
$freelancer->alterarSenha();


 ?>