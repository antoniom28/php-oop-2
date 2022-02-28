<?php

class Sala{
    public $type;
    public $id;
    public $num_posti;
    public $num_file;

    public function __CONSTRUCT($_type, $id, $posti, $file){
        $this->type = $_type;
        $this->id = $id;
        $this->num_posti = $posti;
        $this->num_file = $file;
    }

    public function getSala(){
        return 
            "{$this->id} , 
            numero di posti a sedere : {$this->num_posti} ,
            numero file : {$this->num_file}
            <br>
        ";
    }
}