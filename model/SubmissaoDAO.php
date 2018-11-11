<?php 

Class SubmissaoDAO{
    
    function __construct(){
		
    }
 
    public function inserir($banco,$objeto){
        echo '<pre>';
        $sql = "INSERT INTO tbsubmissao (";
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
    public function tentados($banco,$id){
        $sql = "SELECT COUNT( DISTINCT(TbQuestao_questaoId) ) FROM tbsubmissao WHERE TbUsuario_usuarioId = $id;";
         $result = $banco->conexao->query($sql);
        if(mysqli_num_rows ($result) > 0){
            return $result->fetch_assoc()
        }
        else{
            return array();
        }
    }

    public function resolvidos($banco,$id){
        $sql = "SELECT COUNT( DISTINCT(tbsubmissao.TbQuestao_questaoId) ) 
                FROM tbsubmissao
                INNER JOIN tbalternativa ON tbalternativa.alternativaId = tbsubmissao.TbAlternativa_alternativaId
                WHERE tbalternativa.alternativacorreta = 1
                AND tbsubmissao.TbUsuario_usuarioId = $id;";
         $result = $banco->conexao->query($sql);
        if(mysqli_num_rows ($result) > 0){
            return $result->fetch_assoc()
        }
        else{
            return array();
        }
    }

    

    /*public function retornarAlternativasQuestao($banco,$id){
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
    }*/

}





?>