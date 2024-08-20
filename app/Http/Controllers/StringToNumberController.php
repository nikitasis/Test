<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConvertStringRequest;


class StringToNumberController extends Controller
{
    public function convert(ConvertStringRequest $request)
    {
        $input = $request->input;
        $number = crc32($input);//Хеширование строки

        return response()->json(['number' => $number]);
    }
}
