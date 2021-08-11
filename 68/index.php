<?php
    spl_autoload_register(function($class) {
        include $class . '.php';
    });

    $img = new Image('../img/Symbolic-Links-Linux-1.jpg');
    $img->setAttrs(['height' => 200, 'weight' => 300]);
    echo $img;