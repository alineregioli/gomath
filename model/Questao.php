<?php 

require_once('Comum.php');
Class Questao extends Comum{
    
    protected $questaoNome;
    protected $questaoDescricao;	
    protected $questaoDataCriacao;	
    protected $questaoAssunto;	
 	protected $questaoDificuldade;
 	protected $TbAlternativa_alternativaId;
    protected $questaoDados;

    public function __construct(){

    }


}



?>