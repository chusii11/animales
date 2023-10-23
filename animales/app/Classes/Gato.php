<?php

require_once $_CONFIG['FILES']['CLASSES'] . DIRECTORY_SEPARATOR . 'Animal.php';
class Gato extends Animal {
    function grunir(){
        echo $this->getNombre(). ' MIAUUU!';
    }
}