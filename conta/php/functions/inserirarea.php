<?php 

require_once '../class/areaatuacao.class.php';

$areaatuacao= new areaatuacao();

$idfreelancer=$_POST['idfreelancer'];
$nomearea=$_POST['nomearea'];
$nivelprofissional=$_POST['nivelprofissional'];
$anosexperiencia=$_POST['anosexperiencia'];


$areaatuacao->setIdFreelancer($idfreelancer);
$areaatuacao->setNomearea($nomearea);
$areaatuacao->setNivelprofissional($nivelprofissional);
$areaatuacao->setAnosexperiencia($anosexperiencia);
$areaatuacao->inserir();

header("location:../../freelancer/perfilprofissional.php");

 ?>