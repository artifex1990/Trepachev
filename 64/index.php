<?php
    spl_autoload_register(function($class) {
        include $class . '.php';
    });

    echo (new Tag('input'))->setAttr('name', 'name1')->open();
    echo (new Tag('input'))->setAttr('name', 'name2')->open();