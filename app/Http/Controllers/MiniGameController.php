<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiniGameController extends Controller
{
    public function start() {
        return view('minigame.start');
    }

    public function name() {
        return view('minigame.name');
    }

    public function register() {
        // postメソッドかな
        // 経過時間と名前を受け取って　サーバーに登録する。
        // 登録したらリザルト画面に遷移させる。
        return 'テンプレートはないよ';
    }

    public function result() {
        return view('minigame.result');
    }

}
