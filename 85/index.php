<?php
    spl_autoload_register(function($class) {
        include $class . '.php';
    });

    $db = new DatabaseShell('sql11.freesqldatabase.com', 'sql11430959', 'Ck4XSpKvqM', 'sql11430959');

    var_dump($db->selectAll('employees', ['lastName' => 'Pavel']));