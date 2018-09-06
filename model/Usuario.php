<?php 

Class Usuario{
    
    public $usuarioNomeCompleto;
    public $usuarioEmail;	
    public $usuarioSenha;	
    public $usuarioDataCadastro;	
    public $usuarioSexo;	
    public $TbEspecie_especieId;

    public function __construct(){
		
    }
    public function Init($usuarioNomeCompleto, $usuarioEmail, $usuarioSenha,$usuarioDataCadastro,$usuarioSexo,$TbEspecie_especieId){
    	$this->$usuarioNomeCompleto = $usuarioNomeCompleto;
		$this->$usuarioEmail = $usuarioEmail;	
		$this->$usuarioSenha = $usuarioSenha;	
		$this->$usuarioDataCadastro = $usuarioDataCadastro;	
		$this->$usuarioSexo = $usuarioSexo;	
		$this->$TbEspecie_especieId = $TbEspecie_especieId;
    }

}





?>