<?php 

Class QuestaoDAO{
    
    private $questaoNome;
    private $questaoDescricao;    
    private $questaoDataCriacao;  
    private $questaoAssunto;  
    private $questaoDados;


    function __construct(){
		
    }

    public function inserir($banco,$objeto){
        echo '<pre>';
        $sql = "INSERT INTO tbquestao (";
        $sql .=  implode(',', $objeto->__attributes());
        $sql .= ") VALUES ('";
        $sql .=  implode("','", $objeto->__values());
        $sql .= "')";
        if ($banco->conexao->query($sql) === TRUE) {
            echo "Cadastrado com sucesso";
        } 
        else {
            throw new Exception("Error: " . $sql . "<br>" . $banco->conexao->error);
        }

    }

    public function maiorid($banco){
        $sql = "select max(questaoId) from tbQuestao;";
        //$result = mysql_query($query);
         if ($result = $banco->conexao->query($sql) ) {
            $fetch = mysql_fetch_row($result);
            return $fetch[0];
        } 
        else {
            throw new Exception("Error: " . $sql . "<br>" . $banco->conexao->error);
        }

        

    }

}





?>