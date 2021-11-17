<?php

class Automobile{
    public $name;
    public $model;

    public function setName($name){
        $this->name = $name;
    }
    public function setModel($model){
        $this->model = $model;
    }
    public function getName(){
        return $this->name;
    }
    public function getModel(){
        return $this->model;
    }

}

$toyota = new Automobile;
$toyota->setName('Auris');
$toyota->setModel('petrol');
var_dump($toyota);
