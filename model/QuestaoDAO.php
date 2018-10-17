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

    public function retornarQuestoes($banco){
        $sql = "SELECT questaoNome as nome, questaoDificuldade as nivel, questaoAssunto as assunto FROM tbquestao;";
        $result = $banco->conexao->query($sql);
        if(mysqli_num_rows ($result) > 0){
            $questoes = array();
            while($row = $result->fetch_assoc()){
                $questoes[] = $row;
            }
            return $questoes;
        }
        else{
            return array();
        }
    }

    public function maiorid($banco){
        
        $sql = "select max(questaoId) as maior from tbQuestao;";
        //$result = mysql_query($query);
         if ($result = $banco->conexao->query($sql) ) {
            $fetch = $result->fetch_assoc();
            //echo $fetch[0];
            return $fetch['maior'];
        } 
        else {
            throw new Exception("Error: " . $sql . "<br>" . $banco->conexao->error);
        }
    }

}





?>