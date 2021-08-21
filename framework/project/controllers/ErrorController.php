<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class ErrorController extends Controller
	{
		public function notFound() {
			$this->title = 'Действие контроллера Error';

			$this->title = 'Страница не найдена';
			
			return $this->render('error/notFound');
		}
	}
