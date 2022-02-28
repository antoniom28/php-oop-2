<?php

class Sala4D extends Sala{
    public $effects = [];
    public function __CONSTRUCT($_type, $id, $posti, $file, $_effects){
        parent::__CONSTRUCT($_type, $id, $posti, $file);
        $this->effects = $_effects;
    }

    public function getEffects(){
        $temp = " ";
        foreach($this->effects as $effect){
            $temp .= $effect . " ";
        }
        return $temp;
    }

    public function getSala(){
        return 
            "{$this->id} , 
            Immersiva ({$this->getEffects()}) <br>
            numero di posti a sedere : {$this->num_posti} ,
            numero file : {$this->num_file}
            <br>
        ";
    }
}