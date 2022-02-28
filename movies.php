<?php

class Movie{
    public $name;
    public $actors = [];

    public function __construct($_name, $_actors){
        $this->name = $_name; 
        $this->actors = $_actors; 
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