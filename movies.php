<?php

class Movie{
    public $name;
    public $actors = [];
    public $duration;

    public function __construct($_name, $_actors, $_duration){
        $this->name = $_name; 
        $this->actors = $_actors; 
        $this->duration = $_duration; 
    }

    public function getMovie(){
        return 
            "{$this->name} , 
            actors : ({$this->getActors()})
        ";
    }

    public function getActors(){
        $actors_str = "";
        foreach($this->actors as $actor){
            $actors_str .= " {$actor}";
        }
        return  $actors_str;
    }
}