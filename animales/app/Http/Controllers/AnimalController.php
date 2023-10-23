<?php

class AnimalController{
    private $model;

    public function __construct($model){
        $this->model = $model;
    }

    public function index(){
        view('IndexView', null);
    }

    public function list(){
        $data['perros']=$this->model->getAll();
        view('ListView', $data);
    }

    public function view(){
        $perro = new Perro($_REQUEST['id']);
        //$perro->setId($_REQUEST['id']);
        $auxPerro = $this->model->find($perro);
        $data['perro'] = $auxPerro;
        view('PerroView', $data);
    }

    public function destroy(){
        $perro = new Perro($_REQUEST['id']);
        $this->model->delete();
        $data['mensaje'] = 'Perro Borrado';
        view('MessageView' , $data);
    }
}