<?php
    spl_autoload_register(function($class) {
        include $class . '.php';
    });

    $form = (new Form())->setAttrs(['action' => '', 'method' => 'GET']);

    echo $form->open();

    echo (new Hidden)->setAttr('name', 'id')->setAttr('value', '123');
    echo (new Input)->setAttr('name', 'year');
    echo new Submit;

    echo $form->close();