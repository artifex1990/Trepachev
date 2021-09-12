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

        public function refreshPage(Request $request)
        {
            $key = 'pageRefreshCount';
            $this->refreshPageSum($request, $key);
            return $request->session()->get($key);
        }

        private function refreshPageSum(Request $request, $key)
        {
            $sum = $request->session()->get($key) ?? 0;
            $request->session()->put($key, ++$sum);
        }
    }