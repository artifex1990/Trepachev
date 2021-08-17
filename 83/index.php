<?php
	spl_autoload_register(function ($class) {
        include $class . '.php';
    });

    $flMn = new FileManipulator();

    $flMn->create(@'J:/321.txt');
    $flMn->copy(@'J:/321.txt', @'J:/123.txt');
    $flMn->rename(@'J:/321.txt', '555.txt');
    $flMn->replace(@'J:/123.txt', @'H:/123.txt');
    
    file_put_contents(@'H:/123.txt', 'fsddfsfsdfsdfdasfsafsdad');

    echo "{$flMn->weight( @'H:/123.txt')} byte" ;
