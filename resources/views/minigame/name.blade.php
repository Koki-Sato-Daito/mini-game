@extends('minigame.name')

@section('title', '名前入力')

@section('content')

<form>
    <label>名前を入力してください</label>
    <input type="text" name="name" />

    <button type="submit">決定</button>
</form>

@endsection