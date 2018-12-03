<?php
namespace Hero;
class Wr extends Hero{
    public $power;
    public $speed;
    public $brain;
    public $arts;
    public $name;
    public function __construct($art){
        $this->name = '风行者';
        $this->power = 15;
        $this->brain = 30;
        $this->speed = 20;
        $this->arts = $art;
    }

    public function getArts(){
        return $this->arts;
    }
}