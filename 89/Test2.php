<?php
	namespace Project\Data;
	use Controller\Page as ControllerPage;
	use Model\Page as ModelPage;
	
	class Test
	{
		public function __construct()
		{
			$pageController  = new ControllerPage;
			$pageModel       = new ModelPage;
		}
	}