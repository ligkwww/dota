<?php
namespace Hero;
class Zs extends Hero{
    public $power;
    public $speed;
    public $brain;
    public $arts;
    public function __construct($art){
        $this->name = '宙斯';
        $this->power = 15;
        $this->brain = 30;
        $this->speed = 20;
        $this->arts = $art;
    }

    public function getArts(){
        return $this->arts;
    }
}