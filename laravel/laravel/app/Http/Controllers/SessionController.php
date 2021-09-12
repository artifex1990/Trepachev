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

        public function sessionRequestView(Request $request)
        {
            return $request->session()->put('key', 'new_value');
        }

        public function sessionResponseView(Request $request)
        {
            return view('session.session', ['sessionElement' => $request->session()->pull('key', 'default')]);
        }

        public function sessionAllView(Request $request)
        {
            return view('session.session', ['datas' => json_encode($request->session()->all())]);
        }

        public function sessionGloabal(Request $request)
        {
            session(['val' => 1, 'var' => 2]);
            return session('var', 'default');
        }

        public function sessionHas(Request $request, $test = null)
        {
            $test !== null ?  $request->session()->put('test', $test) : '';
            return $request->session()->has('test') ? $request->session()->get('test') : date('d-m-Y H:m:s');
        }

        public function sessionFlush(Request $request)
        {
            return $request->session()->flush();
        }

        public function refreshPage(Request $request)
        {
            $key = 'pageRefreshCount';
            $this->refreshPageSum($request, $key);
            $pageRefreshCount = $request->session()->get($key);
            $fisrtTimeOnPageUser = $this->firstTimeUserOnPage($request);

            $str = "First time on page user $fisrtTimeOnPageUser<br>
                    Page count refresh $pageRefreshCount<br>";

            return $str;
        }

        public function arraySession(Request $request)
        {
            $request->session()->put('arr', ['a', 'b', 'c']);
            $request->session()->push('arr', 'd');

            var_dump($request->session()->get('arr'));
        }

        public function forgetSession(Request $request)
        {
            $request->session()->forget('key');

            var_dump([$request->session()->get('key'), $request->session()->get('arr')]);
        }

        private function refreshPageSum(Request $request, $key)
        {
            $sum = $request->session()->get($key, 0);
            $request->session()->put($key, ++$sum);
        }

        private function firstTimeUserOnPage(Request $request)
        {
            return $request->session()->get('firstTimeUserOnPage', date('d-m-Y H:m:s'));
        }
    }