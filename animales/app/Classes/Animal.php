<?php

class Animal {
    private int $id;
    private string $nombre;
    private int $edad;
    private string $raza;

    public function __construct($id,$nombre='',$edad=0,$raza=''){
        $this->setId($id);
        $this->setNombre($nombre);
        $this->setEdad($edad);
        $this->setRaza($raza);
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id=$id;
        return $this;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
        return $this;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($edad){
        $this->edad=($edad > 0 ? $edad : 0);
        return $this;
    }

    public function getRaza(){
        return $this->raza;
    }

    public function setRaza($raza){
        $this->raza=$raza;
        return $this;
    }
}