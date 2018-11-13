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
        $sql = "SELECT COUNT( DISTINCT(TbQuestao_questaoId) ) as tentados FROM tbsubmissao WHERE TbUsuario_usuarioId = $id;";
         $result = $banco->conexao->query($sql);
        if(mysqli_num_rows ($result) > 0){
            return $result->fetch_assoc();
        }
        else{
            return array();
        }
    }

    public function resolvidos($banco,$id){
        $sql = "SELECT COUNT( DISTINCT(tbsubmissao.TbQuestao_questaoId) ) as resolvidos
                FROM tbsubmissao
                INNER JOIN tbalternativa ON tbalternativa.alternativaId = tbsubmissao.TbAlternativa_alternativaId
                WHERE tbalternativa.alternativacorreta = 1
                AND tbsubmissao.TbUsuario_usuarioId = $id;";
         $result = $banco->conexao->query($sql);
        if(mysqli_num_rows ($result) > 0){
            return $result->fetch_assoc();
        }
        else{
            return array();
        }
    }

    public function retornarSubmissoes($banco,$id){
        $sql = "SELECT tbsubmissao.submissaoId as id, tbsubmissao.submissaoData as data, tbsubmissao.TbVeredito_vereditoId as veredito, tbquestao.questaoNome as nome 
                FROM tbsubmissao
                INNER JOIN tbquestao ON tbsubmissao.TbQuestao_questaoId = tbquestao.questaoId
                WHERE tbsubmissao.TbUsuario_usuarioId = $id order by id desc;";
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

    public function retornarRanking($banco){
        $sql = "SELECT tbusuario.usuarioNomeCompleto as nome, tbusuario.usuarioId as id, COUNT( DISTINCT(tbsubmissao.TbQuestao_questaoId) ) as resolvidos, SUM( tbquestao.questaoDificuldade ) as pontos
                FROM tbusuario
                INNER JOIN tbsubmissao ON tbusuario.usuarioId = tbsubmissao.TbUsuario_usuarioId
                INNER JOIN tbquestao ON tbquestao.questaoId = tbsubmissao.TbQuestao_questaoId
                INNER JOIN tbalternativa ON tbalternativa.alternativaId = tbsubmissao.TbAlternativa_alternativaId
               WHERE tbalternativa.alternativacorreta = 1 GROUP BY nome order by pontos desc;";
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

}





?>