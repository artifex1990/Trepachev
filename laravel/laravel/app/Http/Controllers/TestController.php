<?php
    namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	
	class TestController extends Controller
	{
		public function show1(Request $request)
		{
			$error = '';

			if ($request->isMethod('post')) {
				if ((int)$request->nums > 0 && (int)$request->nums < 11) {
					return redirect('test/show2');
				} else {
					$error = 'введено некорректное число';
				}
			}
			
			return view('test', ['error' => $error]);
		}
		

		//nop
		public function show2()
		{
			return 'форма успешна отправлена';
		}
	}