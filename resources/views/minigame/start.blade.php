@extends('layouts.app')

@section('title', 'ゲームスタート')


@section('content')

<div id='message'></div>
<div id='result'></div>

@endsection


@section('script')

$(function(){
    console.log('ok');
    let start = null;
    let stop = null;

    $(window).keydown(function(e){
        if(e.keyCode === 32){
            if (start === null) {
                start = new Date();
                console.log(start);
                $("#message").text('space button is keydown');
            }
        }
    });

    $(window).keyup(function(e){
        if(e.keyCode === 32){
            stop = new Date()
            console.log(stop);

            $("#message").text('space button is keyup');
            let passed = (stop.getTime() - start.getTime()) / (1000)
            formatted = Math.floor(passed)
            $("#result").text(formatted);

            start = null
            stop = null
        }
    });

})

@endsection