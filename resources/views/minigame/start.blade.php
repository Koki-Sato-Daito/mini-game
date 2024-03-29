@extends('layouts.app')

@section('title', 'ゲームスタート')


@section('content')

<div>
    <p>PRESS SPACE KEY IS GAME START</p>
</div>
<div id='message'></div>
<div id='result'></div>

@endsection


@section('script')

$(function(){
    console.log('ok');
    let start = null;
    let stop = null;

    function startKeydownLoop(id) {
        id = setInterval(function() {
            let passed = new Date()
            let time = (passed.getTime() - start.getTime()) / (1000)
            $("#result").text(time);
        }, 1);
    }

    function stopKeydownLoop(id) {
        clearInterval(id);
    }

    $(window).keydown(function(e){
        if(e.keyCode === 32){
            if (start === null) {
                start = new Date();
                startKeydownLoop("spaceKeyIsDown");
            }
            console.log(start);
            $("#message").text('space button is keydown');
        }
    });

    $(window).keyup(function(e){
        if(e.keyCode === 32){
            stop = new Date()
            console.log(stop);

            $("#message").text('space button is keyup');
            stopKeydownLoop("spaceKeyIsDown");

            let passed = (stop.getTime() - start.getTime()) / (1000)
            $("#result").text(passed);

            start = null;
            stop = null;

            location.href = 'name?time=' + encodeURIComponent(passed);
        }
    });

})

@endsection