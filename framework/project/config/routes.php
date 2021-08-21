<?php
	use \Core\Route;
	
	return [
		new Route('/page/:id', 'page', 'one'),
		new Route('/pages/',   'page', 'all'),
		new Route('/product/:id', 'product', 'one'),
		new Route('/products/',   'product', 'all'),
	];
	
