<?php

require_once 'conexao.class.php';

class freelancer{

	private $idfreelancer;
	private $nome;
	private $email;
	private $telefone;
	private $areaatuacao;
	private $sexo;
	private $datanascimento;
	private $resumo;
	private $senha;




	public function getId(){
		return $this->idfreelancer;
	}
	public function setId($idfreelancer){
		if(!empty($idfreelancer)) $this->idfreelancer=$idfreelancer;
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
	public function getAreaatuacao(){
		return $this->areaatuacao;
	}
	public function setAreaatuacao($areaatuacao){
		$this->areaatuacao=$areaatuacao;
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
	public function getResumo(){
		return $this->resumo;
	}
	public function setResumo($resumo){
		$this->resumo=$resumo;
	}

	public function getSenha(){
		return $this->senha;
	}
	public function setSenha($senha){
		$this->senha=$senha;
	}	
	public function inserir(){
		
		
		$conect = new conexao();
		try{
			$stmt = $conect->conn->prepare(
				"INSERT INTO freelancer(nome,email,senha)
				VALUES(:nome,:email,:senha)");
			$stmt->bindValue(":nome",$this->getNome());
			$stmt->bindValue(":email",$this->getEmail());
			$stmt->bindValue(":senha",$this->getSenha());
			return $stmt->execute();
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	public function alterar(){
		$conect = new conexao();
		try{
			$stmt = $conect->conn->prepare(
				"UPDATE clientes set nome=:nome,telefone=:telefone,
				email=:email,areaatuacao=:areaatuacao where idfreelancer=:id");
			$stmt->bindValue(":id",$this->getId());
			$stmt->bindValue(":nome",$this->getNome());
			$stmt->bindValue(":telefone",$this->getTelefone());
			$stmt->bindValue(":email",$this->getEmail());
			$stmt->bindValue(":areaatuacao",$this->getareaatuacao());
			return $stmt->execute();
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	public function apagar(){
		$conect = new conexao();
		try{
			$stmt = $conect->conn->prepare(
				"DELETE from clientes where idfreelancer=:idfreelancer");
			$stmt->bindValue(":idfreelancer",$this->getId());
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
					"idfreelancer"=>$row['idfreelancer'],
					"idusuario"=>$row['idusuario'],
					"nome"=>$row['nome'],
					"email"=>$row['email'],
					"telefone"=>$row['telefone'],
					"areaatuacao"=>$row['areaatuacao']);
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
						"select * from freelancer where idfreelancer=:idfreelancer");
					$stmt->bindValue(':idfreelancer',$this->getId());
					$stmt->execute();
					$row=$stmt->fetch();
					$r= array(
						"idfreelancer"=>$row['idfreelancer'],
						"nome"=>$row['nome'],
						"telefone"=>$row['telefone'],
						"email"=>$row['email'],
						"areaatuacao"=>$row['areaatuacao'],
						"sexo"=>$row['sexo'],
						"datanascimento"=>$row['datanascimento'],
						"resumo"=>$row['resumo'],
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
						"select * from freelancer where email=:email and senha=:senha");
					$stmt->bindValue(':email',$this->getEmail());
					$stmt->bindValue(':senha',$this->getSenha());
					$stmt->execute();
					$row=$stmt->fetch();
					$r= array(
						"idfreelancer"=>$row['idfreelancer']);
					return $r;
				}catch(PDOException $e){
					echo $e->getMessage();
				}
			}
			
		}
		?>
