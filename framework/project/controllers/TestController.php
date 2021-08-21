<?php
    namespace Project\Controllers;
    use \Core\Controller;

    class TestController extends Controller
    {
        public function act($params)
		{
            $this->title = 'Действие контроллера Test';
			var_dump($params); // ['var1' => 'eee', 'var2' => 'bbb']
		}

        public function act1()
        {
            $this->title = 'Действие контроллера Test';
            echo '1';
        }

        public function act2()
        {
            $this->title = 'Действие контроллера Test';
            echo '2';
        }

        public function act3()
        {
            $this->title = 'Действие контроллера Test';
            echo '3';
        }
    }