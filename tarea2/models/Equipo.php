<?php

class Equipo extends Modelo{
    public $nombre_tabla = 'equipo';
    public $pk = 'id_equipo';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'id_equipo'=>array(),
        'escudo'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $id_equipo;
    private $escudo;
       
    
    function Equipo(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_nombre(){
        return $this->nombre;
    } 

    public function set_nombre($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este e-mail (".$valor.") no es valido";
        }

        $this->nombre = trim($valor);


        /*$rs = $this->consulta_sql("select * from usuarios where id_equipo = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este e-mail (".$valor.") ya esta registrado"; 
        }else{
            $this->email = trim($valor);
        }*/
    }

    public function get_password(){
        return $this->baja;
    }
    
    public function set_password($valor){
        $this->password = trim( md5($valor) );
    }
}

?>
