<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiniGameController extends Controller
{
    // 
    public function start() {
        return view('minigame.start');
    }

    public function register() {
        return 'テンプレートはないよ';
    }

    public function result() {
        return view('minigame.result');
    }

}
