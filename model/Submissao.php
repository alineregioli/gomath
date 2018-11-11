<?php 

require_once('Comum.php');

Class Submissao extends Comum{
    
    protected $submissaoId;
    protected $submissaoData;
 	protected $submissaoDados;
 	protected $TbVeredito_vereditoId;
 	protected $TbAlternativa_alternativaId;
 	protected $TbUsuario_usuarioId;
 	protected $TbQuestao_questaoId;
 	

    public function __construct(){
    }


}



?>