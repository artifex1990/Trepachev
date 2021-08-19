<?php
    namespace Project\Controllers;
    use \Core\Controller;

    class NumController extends Controller
    {
        public function sum($params)
        {
            echo array_sum(array_filter($params, function($a) {return is_numeric($a);}));
        }
    }