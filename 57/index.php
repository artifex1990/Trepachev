<?php
	spl_autoload_register(function ($class) {
        include $class . '.php';
    });

	$date1 = new Date('2025-12-31');
	$date2 = new Date('2020-11-28');
	
	$interval = new Interval($date1, $date2);
	
	echo $interval->toDays() . PHP_EOL;   // выведет разницу в днях
	echo $interval->toMonths() . PHP_EOL; // выведет разницу в месяцах
	echo $interval->toYears() . PHP_EOL;  // выведет разницу в годах
	
	var_dump($interval); // массив вида ['years' => '', 'months' => '', 'days' => '']