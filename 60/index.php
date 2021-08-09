<?php
    spl_autoload_register(function($class) {
        include $class . '.php';
    });

    $tag = new Tag('input', ['id' => 'test', 'class' => 'eee bbb']);
    echo $tag->open(); // выведет <input id="test" class="eee bbb">