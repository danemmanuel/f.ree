<?php 

require_once '../class/freelancer.class.php';

$freelancer= new freelancer();

$idfreelancer=$_POST['idfreelancer'];
$nomefreelancer=$_POST['nomefreelancer'];
$email=$_POST['email'];
$datanascimento=$_POST['datanascimento'];
$sexo=$_POST['sexo'];
$telefone=$_POST['telefone'];

$datanova = date("Y-m-d", strtotime($datanascimento));

$freelancer->setId($idfreelancer);
$freelancer->setNome($nomefreelancer);
$freelancer->setEmail($email);
$freelancer->setDatanascimento($datanova);
$freelancer->setSexo($sexo);
$freelancer->setTelefone($telefone);
$freelancer->alterarFreelancer();

header("location:../../conta");



?>