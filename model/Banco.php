<?php 

Class Banco{
    
	public $username = "root";
	public $servername = "localhost";
	public $password = "";
	public $database = "bancotcc";
	public $conexao;

	function __construct(){
		
    }

	public function conectar(){
		$this->conexao = mysqli_connect($this->servername, $this->username, $this->password,$this->database);
		$this->conexao->set_charset('utf8');
		$this->conexao->query("SET collation_connection = utf8_general_ci");
		$this->conexao->query("SET foreign_key_checks = 0");
	    return $this->conexao;
	}

	public function logar($login,$senha){
		session_start();
		$result = $this->conexao->query("SELECT * FROM `tbusuario` 
	WHERE usuarioEmail = '$login' AND usuarioSenha = '$senha'");
		if(mysqli_num_rows ($result) > 0 ){
			$row = $result->fetch_assoc();
			$_SESSION['login'] = $login;
			$_SESSION['id'] = $row['usuarioId'];
			$_SESSION['nome'] = $row['usuarioNomeCompleto'];
			$_SESSION['acesso'] = $row['TbEspecie_especieId'];
			$result->close();
			return true;
		}
		else{
		  unset ($_SESSION['login']);
		  unset ($_SESSION['senha']);
		  return false;
		}
	}


    
}





?>