<?php
    spl_autoload_register(function($class) {
        include $class . '.php';
    });

    $form = (new Form())->setAttrs(['action' => '', 'method' => 'GET']);

    echo $form->open();

    echo (new Input)   ->setAttr('name', 'login');
    echo (new Password)->setAttr('name', 'passw');
    echo new Submit;

    echo $form->close();