<?php 

require_once '../../conta/php/class/freelancer.class.php';


$email=$_POST['email'];
$senha=$_POST['senha'];

$freela=new freelancer();



$freela->setEmail($email);
$freela->setSenha($senha);
$busca=$freela->login();

$idfreelancer=$busca['idfreelancer'];

$ativo=$busca['ativo'];



if (isset($idfreelancer)) {
	

	session_start();

	if($ativo=="0"){
		header("location:../../cadastro/f/contaexcluida.php");
	}

	elseif($ativo=="1"){

		$_SESSION['idfreelancer'] = $idfreelancer;
		header("location:../../conta/f");
	}


}else{
	echo "usuario nao cadastrado";
}



?>