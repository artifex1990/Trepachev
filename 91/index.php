<?php
    spl_autoload_register(function($class) {
		$ds = DIRECTORY_SEPARATOR;
		$filename = $_SERVER['DOCUMENT_ROOT'] . $ds . str_replace('\\', $ds, $class) . '.php';
		require($filename);
	});

    var_dump(new Core\Admin\Controller);
    var_dump(new Core\User);
    var_dump(new Project\User\Data);