<?php
    spl_autoload_register(function($class) {
        include $class . '.php';
    });

    $form = (new Form())->setAttrs(['action' => '', 'method' => 'GET']);

    echo $form->open();
    echo (new Input)->setAttr('name', 'test');

    echo (new Select())->setAttr('name', 'list')
		->add( (new Option())->setText('item1') )
		->add( (new Option())->setText('item2') )
		->add( (new Option())->setText('item3') )
		->show();

    echo new Submit;    
    echo $form->close();