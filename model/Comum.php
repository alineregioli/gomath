<?php 

Class Comum{
    

    public function __get($atributo) { 
            return $this->$atributo;
    }

    public function __set($atributo,$valor) {
            $this->$atributo = $valor;
    }

    public function __attributes() {
        $array = array();
        foreach ($this as $key => $value) {
            $array[] = $key;
        }
        return $array;
    }
    public function __values(){
        $array = array();
        foreach ($this as $key => $value) {
            $array[] = $value;
        }
        return $array;
    }
  

}





?>