<?php
    namespace App\Http\Controllers;

    class Test extends Controller
    {
        public function sum($num1, $num2)
        {
            return $num1 + $num2;
        }
    }