<?php
    spl_autoload_register(function($class) {
        include $class . '.php';
    });

    $th = new TagHelper();
	
	echo $th->open('form', ['action' => 'test.php', 'method' => 'GET']);
		echo $th->open('input', ['name' => 'year']);
		echo $th->open('input', ['type' => 'submit']);
	echo $th->close('form');

    echo $th->show('div', 'privet');