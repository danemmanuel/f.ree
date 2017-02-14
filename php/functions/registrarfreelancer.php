<?php 
require_once '../class/freelancer.class.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];


$freelancer = new freelancer();
$freelancer -> setNome($nome);
$freelancer -> setTelefone($telefone);
$freelancer -> setEmail($email);
$freelancer -> setSenha($senha);
$freelancer -> inserir();
header("location:../../index.html");

 ?>