<?php 

require_once '../class/servicos.class.php';

$servicos= new servicos();

$idfreelancer=$_POST['idfreelancer'];
$nomeservico=$_POST['nomeservico'];
$descricao=$_POST['descricao'];
$preco=$_POST['preco'];


$servicos->setIdFreelancer($idfreelancer);
$servicos->setNomeServico($nomeservico);
$servicos->setDescricao($descricao);
$servicos->setPreco($preco);
$servicos->inserir();

header("location:../../conta/perfilprofissional.php");

 ?>