<?php

require_once 'conexao.class.php';

class cliente{

	private $idcliente;
	private $nome;
	private $email;
	private $telefone;
	private $sexo;
	private $datanascimento;
	private $senha;
	private $urlavatar;




	public function getId(){
		return $this->idcliente;
	}
	public function setId($idcliente){
		if(!empty($idcliente)) $this->idcliente=$idcliente;
	}
	public function getNome(){
		return $this->nome;
	}
	public function setNome($nome){
		$this->nome=$nome;
	}
	public function getTelefone(){
		return $this->telefone;
	}
	public function setTelefone($telefone){
		$this->telefone=$telefone;
	}
	public function getEmail(){
		return $this->email;
	}
	public function setEmail($email){
		$this->email=$email;
	}
	public function getSexo(){
		return $this->sexo;
	}
	public function setSexo($sexo){
		$this->sexo=$sexo;
	}
	public function getDatanascimento(){
		return $this->datanascimento;
	}
	public function setDatanascimento($datanascimento){
		$this->datanascimento=$datanascimento;
	}

	public function getSenha(){
		return $this->senha;
	}
	public function setSenha($senha){
		$this->senha=$senha;
	}	
	public function getUrlAvatar(){
		return $this->urlavatar;
	}
	public function setUrlAvatar($urlavatar){
		$this->urlavatar=$urlavatar;
	}
	public function inserir(){
		
		
		$conect = new conexao();
		try{
			$stmt = $conect->conn->prepare(
				"INSERT INTO cliente(nome,email,senha,ativo)
				VALUES(:nome,:email,:senha,'1')");
			$stmt->bindValue(":nome",$this->getNome());
			$stmt->bindValue(":email",$this->getEmail());
			$stmt->bindValue(":senha",$this->getSenha());
			return $stmt->execute();
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	public function alterarAvatar(){
		
		$conect = new conexao();
		try{
			$stmt = $conect->conn->prepare(
				"UPDATE cliente set urlavatar=:urlavatar where idcliente=:idcliente");
			$stmt->bindValue(":idcliente",$this->getId());
			$stmt->bindValue(":urlavatar",$this->getUrlAvatar());
			return $stmt->execute();
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	public function alterarcliente(){
		$conect = new conexao();
		try{
			$stmt = $conect->conn->prepare(
				"UPDATE cliente set nome=:nome,telefone=:telefone,
				email=:email,sexo=:sexo,datanascimento=:datanascimento where idcliente=:idcliente");
			$stmt->bindValue(":idcliente",$this->getId());
			$stmt->bindValue(":nome",$this->getNome());
			$stmt->bindValue(":telefone",$this->getTelefone());
			$stmt->bindValue(":email",$this->getEmail());
			$stmt->bindValue(":sexo",$this->getSexo());
			$stmt->bindValue(":datanascimento",$this->getDatanascimento());
			return $stmt->execute();
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}


	public function alterarSenha(){
		$conect = new conexao();
		try{
			$stmt = $conect->conn->prepare(
				"UPDATE cliente set senha=:senha where idcliente=:idcliente");
			$stmt->bindValue(":idcliente",$this->getId());
			$stmt->bindValue(":senha",$this->getSenha());
			return $stmt->execute();
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function alterarResumo(){
		$conect = new conexao();
		try{
			$stmt = $conect->conn->prepare(
				"UPDATE cliente set resumo=:resumo where idcliente=:idcliente");
			$stmt->bindValue(":idcliente",$this->getId());
			$stmt->bindValue(":resumo",$this->getResumo());
			return $stmt->execute();
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function excluirConta(){
		$conect = new conexao();
		try{
			$stmt = $conect->conn->prepare(
				"UPDATE cliente SET ativo='0' where idcliente=:idcliente");
			$stmt->bindValue(":idcliente",$this->getId());
			return $stmt->execute();
						
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	public function apagar(){
		$conect = new conexao();
		try{
			$stmt = $conect->conn->prepare(
				"DELETE from clientes where idcliente=:idcliente");
			$stmt->bindValue(":idcliente",$this->getId());
			return $stmt->execute();
			
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	public function buscarTodos(){
		$conect = new conexao();
		try{
			$stmt = $conect->conn->prepare(
				"SELECT * from clientes where idusuario=:idusuario");
			$stmt->bindValue(":idusuario",$this->getIdUsuario());
			$stmt->execute();
			$r=$stmt->fetchAll();
			$resposta= array();
			foreach ($r as $row) {
				$temp= array(
					"idcliente"=>$row['idcliente'],
					"idusuario"=>$row['idusuario'],
					"nome"=>$row['nome'],
					"email"=>$row['email'],
					"telefone"=>$row['telefone']);
				array_push($resposta, $temp);
			}
			return $resposta;
		}catch(PDOException $e){
			echo $e->getMessage();
		}}
		public function somar(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
					"SELECT * from clientes where idusuario=:idusuario");
				$stmt->bindValue(":idusuario",$this->getIdUsuario());
				$stmt->execute();
				$r=$stmt->fetchAll();
				$i=0;
				foreach ($r as $row) {
					$i++;
				}
				
				echo $i;
			}catch(PDOException $e){
				echo $e->getMessage();
			}}
			
			public function buscarId(){
				$conect = new conexao();
				try{
					$stmt = $conect->conn->prepare(
						"select * from cliente where idcliente=:idcliente");
					$stmt->bindValue(':idcliente',$this->getId());
					$stmt->execute();
					$row=$stmt->fetch();
					$r= array(
						"idcliente"=>$row['idcliente'],
						"nome"=>$row['nome'],
						"telefone"=>$row['telefone'],
						"email"=>$row['email'],
						"sexo"=>$row['sexo'],
						"datanascimento"=>$row['datanascimento'],
						"urlavatar"=>$row['urlavatar'],
						"senha"=>$row['senha']);
					return $r;
				}catch(PDOException $e){
					echo $e->getMessage();
				}
			}

			public function login(){
				$conect = new conexao();
				try{
					$stmt = $conect->conn->prepare(
						"select * from cliente where email=:email and senha=:senha and ativo='1'");
					$stmt->bindValue(':email',$this->getEmail());
					$stmt->bindValue(':senha',$this->getSenha());
					$stmt->execute();
					$row=$stmt->fetch();
					$r= array(
						"idcliente"=>$row['idcliente']);
					return $r;
				}catch(PDOException $e){
					echo $e->getMessage();
				}
			}
			
		}
		?>
