<?php

namespace App\Http\Controllers;

use App\Tasks\Task1;
use Illuminate\Http\Request;

class User2Controller extends Controller
{
    public function profile()
    {
        $task1 = new Task1('test text');

        //$task1->text = '33';

        $result = $task1->run();

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
