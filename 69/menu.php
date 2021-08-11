<?php
    spl_autoload_register(function($class) {
        include $class . '.php';
    });
?>

<ul>
    <li><?=(new Link("1.php"))->setText('1')->show();?></li>
    <li><?=(new Link("2.php"))->setText('2')->show();?></li>
    <li><?=(new Link("3.php"))->setText('3')->show();?></li>
    <li><?=(new Link("4.php"))->setText('4')->show();?></li>
    <li><?=(new Link("5.php"))->setText('5')->show();?></li>
</ul>
    
    
    
    
    