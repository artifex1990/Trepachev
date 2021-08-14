<?php
    spl_autoload_register(function($class) {
        include $class . '.php';
    });

    $valid = new Validator;

    echo (($valid->isEmail('raz@ya.ru')) ? 'Рабочее мыло' : 'Не рабочее мыло') . PHP_EOL;
    echo (($valid->isDomain('yaru')) ? 'Рабочий домен' : 'Не рабочий домен') . PHP_EOL;
    echo (($valid->inRange(4, 2, 10)) ? 'Попадает в диапазон' : 'Не попадает в диапазон') . PHP_EOL;
    echo (($valid->inLength('raz@ya.ru', 18, 100)) ? 'Попадает в длину строки диапозона' : 'Не попадает в длину строки диапозона') . PHP_EOL;