<?php 
require_once '../class/freelancer.class.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$freelancer = new freelancer();
$freelancer -> setNome($nome);
$freelancer -> setEmail($email);
$freelancer -> setSenha($senha);
$freelancer -> inserir();
header("location:../../login");

 ?>