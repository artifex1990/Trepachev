<?php
    spl_autoload_register(function($class) {
        include $class . '.php';
    });

    $img = new Tag('img');
	echo $img->open(); 

    $header = new Tag('header');
    echo $header->open() . 'header сайта' . $header->close();