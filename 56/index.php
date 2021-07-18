<?php
    spl_autoload_register(function ($class) {
        include $class . '.php';
    });

    $date = new Date('2025-12-31');
	
	echo $date->getYear() . PHP_EOL;  // выведет '2025'
	echo $date->getMonth() . PHP_EOL; // выведет '12'
	echo $date->getDay() . PHP_EOL;   // выведет '31'
	
	echo $date->getWeekDay() . PHP_EOL;     // выведет '3'
	echo $date->getWeekDay('ru') . PHP_EOL; // выведет 'среда'
	echo $date->getWeekDay('en') . PHP_EOL; // выведет 'wednesday'

    echo (new Date('2025-12-31'))->addYear(1) . PHP_EOL; // '2026-12-31'
	echo (new Date('2025-12-31'))->addDay(1) . PHP_EOL;  // '2026-01-01'
	
	echo (new Date('2025-12-31'))->subDay(3)->addYear(1) . PHP_EOL; // '2026-12-28'
