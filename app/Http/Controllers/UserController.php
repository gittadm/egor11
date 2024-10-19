<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        $a = ['x' => 1, 'y' => 2];

        $text = json_encode($a);

        $b = json_decode($text, true);

        info($text);
        info($b);

        return response()->json([
            'user' => 'Ivan',
            'counts' => [1, 5, 6, 8],
        ], 200);

        return ['user' => 'Ivan'];
    }
}
