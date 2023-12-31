<?php

namespace App\Http\Controllers;

use App\Models\License;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class QuestionController extends Controller
{
    public function get(Request $request)
    {
        $ip = $request->ip();

        $license = License::where('ip', $ip)->first();

        if (!$license || !$license->status) {
            return response()->json([
                'status' => false,
                'message' => 'License hết hạn'
            ]);
        }

        $cauhoi = $request->get('cauhoi');
        $a = Str::ascii($request->get('A'));
        $b = Str::ascii($request->get('B'));
        $c = Str::ascii($request->get('C'));
        $d = Str::ascii($request->get('D'));

        $answer = Question::search($cauhoi)->first();

        $answer = isset($answer['answer']) ? Str::ascii($answer['answer']) : "";

        $sima = similar_text($answer, $a);
        $simb = similar_text($answer, $b);
        $simc = similar_text($answer, $c);
        $simd = similar_text($answer, $d);

        $max = max($sima, $simb, $simc, $simd);

        $select = 0;

        if ($sima == $max) {
            $select = 1;
        } else if ($simb == $max) {
            $select = 2;
        } else if ($simc == $max) {
            $select = 3;
        } else {
            $select = 4;
        }

        return response()->json([
            'status' => true,
            'message' => $select
        ]);
    }
}
