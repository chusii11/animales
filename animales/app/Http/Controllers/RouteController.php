<?php

class RouteController {

    private $animalController;

    public function __construct($animalController){
        $this->animalController = $animalController;
    }

    public function execute(){
        if (isset($_REQUEST['action'])){
            switch($_REQUEST['action']){
                case 'insert':
                    echo "Insertar animal";
                    break;
                case 'insertView':
                    echo 'Formulario insertar animal';
                    break;
                case 'edit':
                    echo 'Editar animal';
                    break;
                case 'editView':
                    echo 'Formulario editar animal';
                    break;
                case 'destroy':
                    $this->animalController->destroy();
                    break;
                case 'list':
                    $this->animalController->list();
                    break;
                case 'view':
                    $this->animalController->view();
                    break;
            }
        }else {
            $this->animalController->index();
        }
    }
}