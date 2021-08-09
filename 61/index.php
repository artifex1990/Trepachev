<?php
    spl_autoload_register(function($class) {
        include $class . '.php';
    });

    $tag = new Tag('div');
	echo $tag->setAttr('id', 'test')->setAttr('class', 'my_test')->removeAttr('id')->open(); // откроем тег
	echo $tag->close(); // закроем тег