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
            actors : ({$this->getActors('all')})
        ";
    }

    public function getMovieLessName(){
        return 
            "{$this->name} , 
            actors : ({$this->getActors('less')})
        ";
    }

    public function getActors($type){
        $actors_str = "";
        foreach($this->actors as $actor){ 
            if($type == 'less')
                $actors_str .= strtok($actor, " ")[0]. "." .strstr($actor," ") . " ";
            else
                $actors_str .= $actor . " ";
        }
        return  $actors_str;
    }
}