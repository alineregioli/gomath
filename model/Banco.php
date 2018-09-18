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
	    return $this->conexao;
	}

	public function logar($login,$senha){
		session_start();
		$result = $this->conexao->query("SELECT * FROM `tbusuario` 
	WHERE `usuarioEmail` = '$login' AND `usuarioSenha`= '$senha'");
		if(mysqli_num_rows ($result) > 0 ){
			$_SESSION['login'] = $login;
			$_SESSION['senha'] = $senha;
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