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


    
}





?>