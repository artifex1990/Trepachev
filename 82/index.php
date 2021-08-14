<?php
    spl_autoload_register(function($class) {
        include $class . '.php';
    });

    $ses = new SessionShell;

    $ses->set('raz', 1);
    $ses->set('dva', 4);

    echo $ses->get('raz') . PHP_EOL;
    echo $ses->get('dva') . PHP_EOL;