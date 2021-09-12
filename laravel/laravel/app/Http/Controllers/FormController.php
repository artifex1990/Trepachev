<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class FormController extends Controller
    {
        public function finalForm(Request $request)
        {
            $data = $request->all();
            return view('forms.final', ['data' => $data]);
        }

        public function reg(Request $request)
        {
            return view('forms.reg');
        }

        public function testProduct(Request $request)
        {
            $str  = "path: {$request->path()} <br>";
            $str .= "url: {$request->url()} <br>";
            $str .= "fullUrl: {$request->fullUrl()} <br>";
            $str .= "fullUrlWithQuery: {$request->fullUrlWithQuery(['page' => 1])} <br>";
            $str .= "is: " . (int)($request->is('test/*')) . "<br>";

            return $str;
        }

        public function regResult(Request $request, $dop = null)
        {
            $only = $request->only(['name', 'surname', 'login']);
            $except = $request->except(['password', 'email']);
            return view('forms.regResult', ['only' => $only, 'except' => $except, 'dop' => $dop]);
        }

        public function blended(Request $request, $dop = null)
        {
            if ($request->isMethod('get')) {
                return $this->reg($request);
            } elseif ($request->isMethod('post')) {
                return $this->regResult($request, $dop);
            }
        }

        private function form(Request $request)
        {
            return view('forms.form', ['method' => $request->method()]);
        }

        private function result(Request $request)
        {
            $result = null;
            if (
                $request->has('num1') 
                && $request->has('num2')
                && $request->has('num3')
                ) {
                    if (
                        is_numeric($request->num1) 
                        && is_numeric($request->num2)
                        && is_numeric($request->num2)
                        && is_numeric($request->num3)
                        ) {
                            $result = $request->num1 + $request->num2 + $request->num3;
                    }
            }

            return view('forms.result', ['result' => $result, 'method' => $request->method()]);
        }
    }