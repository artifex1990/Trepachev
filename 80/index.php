<?php
    spl_autoload_register(function($class) {
        include $class . '.php';
    });

    $fh = new FormHelper();
	
	echo $fh->openForm(['action' => '', 'method' => 'GET']);
		echo $fh->input(['name' => 'year']);
        echo $fh->password(['name' => 'pass']);
        echo $fh->hidden(['name' => 'hide']);
		echo $fh->checkbox(['name' => 'check']);
        echo $fh->textarea(['name' => 'texta']);
        echo $fh->select(
            ['name' => 'list', 'class' => 'eee'],
            [
                ['text' => 'item1', 'attrs' => ['value' => '1']],
                ['text' => 'item2', 'attrs' => ['value' => '2', 'selected' => true]],
                ['text' => 'item3', 'attrs' => ['value' => '3', 'class' => 'last']],
            ],
            
        );
		echo $fh->submit();
	echo $fh->closeForm();