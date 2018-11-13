<?php 

Class AlternativaDAO{
    
    private $alternativaTexto;
    private $alternativaCorreta;
    private $TbQuestao_questaoId;


    function __construct(){
		
    }
 
    public function inserir($banco,$objeto){
        echo '<pre>';
        $sql = "INSERT INTO tbalternativa (";
        $sql .=  implode(',', $objeto->__attributes());
        $sql .= ") VALUES ('";
        $sql .=  implode("','", $objeto->__values());
        $sql .= "')";
        if ($banco->conexao->query($sql) === TRUE) {
            echo "Cadastrado com sucesso";
            return $banco->conexao->insert_id;
        } 
        else {
            throw new Exception("Error: " . $sql . "<br>" . $banco->conexao->error);
        }

    }

    public function retornarAlternativasQuestao($banco,$id){
        $sql = "SELECT alternativaId as id, alternativaTexto as texto FROM tbalternativa WHERE TbQuestao_questaoId = $id;";
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

    public function retornarAlternativaCorreta($banco,$id){
        $sql = "SELECT alternativaId as id FROM tbalternativa WHERE TbQuestao_questaoId = $id AND alternativacorreta = 1;";
        $result = $banco->conexao->query($sql);
        if(mysqli_num_rows ($result) > 0){
            return $result->fetch_assoc();
        }
        else{
            return array();
        }
    }

}





?>