<?php
    spl_autoload_register(function($class) {
        include $class . '.php';
    });

    echo (new Tag('input'))->getName() . PHP_EOL;
    echo (new Tag('div', 'Hello, World'))->getText() . PHP_EOL;
    var_dump((new Tag('input'))->setAttrs(['id' => 'myvar', 'class' => 'aaa bbb ccc'])->getAttrs());
    echo (new Tag('input'))
            ->setAttrs(['id' => 'my_var', 'class' => 'aaa bbb ccc'])
            ->getAttr('class') . PHP_EOL;