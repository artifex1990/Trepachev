<?php
    spl_autoload_register(function($class) {
        include $class . '.php';
    });

    $form = (new Form())->setAttrs(['action' => '', 'method' => 'GET']);

    echo $form->open();

    echo (new Input)->setAttr('name', 'name1');
    echo (new Input)->setAttr('name', 'name2');
    echo (new Input)->setAttr('name', 'name3');
    echo (new Input)->setAttr('name', 'name4');
    echo (new Input)->setAttr('name', 'name5');
    echo new Submit;

    echo $form->close();

    if (!empty($_REQUEST)) {
        $sum = 0;
        foreach($_REQUEST as $value) {
            $sum += (!empty($value)) 
                    ? is_numeric($value) 
                        ? $value 
                        : 0 
                    : 0;
        }

        echo (new Tag('div', 'Сумма чисел: ' . $sum))->show();
    }