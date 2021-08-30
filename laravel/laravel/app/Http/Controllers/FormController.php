<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class FormController extends Controller
    {
        public function form(Request $request)
        {
            $result = null;
            if ($request->has('num1') && $request->has('num2')) {
                if (is_numeric($request->num1) && is_numeric($request->num2))
                {
                    $result = $request->num1 + $request->num2;
                }
            }

            return view('forms.form', ['result' => $result]);
        }
    }