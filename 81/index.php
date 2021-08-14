<?php
    spl_autoload_register(function($class) {
        include $class . '.php';
    });

    $csh = new CookieShell;
	if (!$csh->exists('countRefreshPage')) {
        $csh->set('countRefreshPage', 0, strtotime('+30 days'));
    } else {
        $csh->set('countRefreshPage', ++$_COOKIE['countRefreshPage'], strtotime('+30 days'));
    }

	echo "Количество перезагрузки страниц: {$csh->get('countRefreshPage')}"; 