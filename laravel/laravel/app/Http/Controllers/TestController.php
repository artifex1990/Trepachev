<?php
    namespace App\Http\Controllers;
	
	class TestController extends Controller
	{
		public function show($param1, $param2)
		{
			return $param1 . ' ' . $param2;
		}
	}