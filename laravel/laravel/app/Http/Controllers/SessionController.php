<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class SessionController extends Controller 
    {
        public function sessionRequest(Request $request)
        {
            return $request->session()->put('key', 'value');
        }

        public function sessionResponse(Request $request)
        {
            return $request->session()->get('key');
        }
    }