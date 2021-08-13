<?php
    spl_autoload_register(function($class) {
        include $class . '.php';
    });

    $form = (new Form())->setAttrs(['action' => '', 'method' => 'GET']);

    echo $form->open();

    echo (new Radiobutton)->setAttr('name', 'radio1')->setAttr('value', '1');
    echo (new Radiobutton)->setAttr('name', 'radio1')->setAttr('value', '2');
    echo (new Radiobutton)->setAttr('name', 'radio1')->setAttr('value', '3');
    echo '<br>';
    echo (new Radiobutton)->setAttr('name', 'radio2')->setAttr('value', '1');
    echo (new Radiobutton)->setAttr('name', 'radio2')->setAttr('value', '2');
    echo (new Radiobutton)->setAttr('name', 'radio2')->setAttr('value', '3');
    echo new Submit;

    echo $form->close();