<?php
	use \Core\Route;
	
	return [
		new Route('/my-page1/', 'page', 'show1'), 
		new Route('/my-page2/', 'page', 'show2'), 
		new Route('/my-test1/', 'test', 'act1'), 
		new Route('/my-test2/', 'test', 'act2'), 
		new Route('/my-test3/', 'test', 'act3'), 
	];
	
