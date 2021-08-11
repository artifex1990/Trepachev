<?php
    spl_autoload_register(function($class) {
        include $class . '.php';
    });

    $form = (new Form())->setAttrs(['action' => 'test.php', 'method' => 'POST']);

    echo $form->open();

    echo $form->close();