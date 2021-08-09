<?php
    spl_autoload_register(function($class) {
        include $class . '.php';
    });

    $tag = new Tag('input');
	
	echo $tag
		->setAttr('id', 'test')
		->setAttr('disabled', true)
		->open(); // выведет <input id="test" disabled>