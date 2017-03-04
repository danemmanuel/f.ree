<?php 

require_once '../class/habilidades.class.php';

$habilidades= new habilidades();

$idfreelancer=$_POST['idfreelancer'];
$nomehabilidade=$_POST['nomehabilidade'];
$nivel=$_POST['nivel'];


$habilidades->setIdFreelancer($idfreelancer);
$habilidades->setNomehabilidade($nomehabilidade);
$habilidades->setNivel($nivel);
$habilidades->inserir();

header("location:../../f/habilidades.php");

 ?>