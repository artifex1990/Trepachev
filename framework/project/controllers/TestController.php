<?php
    namespace Project\Controllers;
    use \Core\Controller;

    class TestController extends Controller
    {
        public function act($params)
		{
			var_dump($params); // ['var1' => 'eee', 'var2' => 'bbb']
		}

        public function act1()
        {
            echo '1';
        }

        public function act2()
        {
            echo '2';
        }

        public function act3()
        {
            echo '3';
        }
    }