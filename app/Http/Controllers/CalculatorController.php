<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {



        //* Validation
        $validator = Validator::make($request->all(), [
            'num1' => 'required|numeric',
            'num2' => 'required|numeric',
            'operator' => 'required|in:add,subtract,multiply,divide',
        ]);

        if ($validator->fails()) {
            return view('calculator', ['errors' => $validator->errors()->all()]);
        }

        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $operation = $request->input('operator');

        $result = $this->{$operation}($num1,$num2);

        return view('calculator', ['result' => $result]);


    }

    public function add($num1,$num2)
    {

        return $num1 + $num2;

    }

    public function subtract($num1,$num2)

    {

        return $num1 - $num2;

    }

    public function multiply($num1,$num2)

    {

        return $num1 * $num2;

    }

    public function divide($num1,$num2)

    {

        return $num1 / $num2;

    }
}
