<?php

function view($view, $data){
    global $_CONFIG;

    ob_start();

    if(!empty($data)){
        extract($data);
    }

    require_once $_CONFIG['FILES']['VIEWS'].DIRECTORY_SEPARATOR.$view.'.php';


    ob_end_flush();
}