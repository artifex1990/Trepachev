<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class FormController extends Controller
    {
        public function form(Request $request)
        {
            return view('forms.form');
        }

        public function result(Request $request)
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

            return view('forms.result', ['result' => $result]);
        }
    }