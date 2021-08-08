<?php
	spl_autoload_register(function ($class) {
        include $class . '.php';
    });

    $file = new File(@'/home/stokato/2/321.txt');

    $file->getDir();