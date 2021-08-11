<?php
    spl_autoload_register(function($class) {
        include $class . '.php';
    });

    $listUl = new Ul();
    $listOl = new Ol();

    echo $listUl->addItem(new ListItem('item1'))->addItem(new ListItem('item2'))->addItem(new ListItem('item3'));
    echo $listOl->addItem(new ListItem('item1'))->addItem(new ListItem('item2'))->addItem(new ListItem('item3'));