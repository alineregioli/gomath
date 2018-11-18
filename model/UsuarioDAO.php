<?php 

Class UsuarioDAO{
    
    private $NomeCompleto;
    private $usuarioEmail;	
    private $usuarioSenha;	
    private $usuarioDataCadastro;	
    private $usuarioSexo;	
    private $Especie_especieId;

    function __construct(){
		
    }

    public function inserir($banco,$objeto){
        echo '<pre>';
        $sql = "INSERT INTO tbusuario (";
        $sql .=  implode(',', $objeto->__attributes());
        $sql .= ") VALUES ('";
        $sql .=  implode("','", $objeto->__values());
        $sql .= "')";
        if ($banco->conexao->query($sql) === TRUE) {
            //echo "Cadastrado com sucesso";
             header("Location: ../entrar");
        } 
        else {
            throw new Exception("Error: " . $sql . "<br>" . $banco->conexao->error);
        }

    }

}





?>