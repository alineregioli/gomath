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
        $array =  get_object_vars($objeto);
        array_pop($array);
        array_pop($array);
        var_dump($array);
        $sql = "INSERT INTO tbusuario (";
        $aux = '';
       foreach($array as $key => $value){
            $sql .= $key.',';
            $aux .= $value.',';
        } 
        $sql = rtrim($sql,',');
        $aux = rtrim($aux,',');
        $sql .= ') VALUES ('.$aux.')';
        echo $sql;
        if ($banco->conexao->query($sql) === TRUE) {
            echo "New record created successfully";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $banco->conexao->error;
        }

    }

}





?>