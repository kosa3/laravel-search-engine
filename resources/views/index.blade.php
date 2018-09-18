<link href="https://fonts.googleapis.com/css?family=M+PLUS+1p|Sawarabi+Gothic" rel="stylesheet">

<h1>クチコミ検索結果</h1>
{{--@php--}}
    {{--collect($resultset)->map(function ($documents){--}}
    {{--$title = $documents->title[0];--}}
    {{--$comments = $documents->comment[0];--}}
{{--@endphp--}}

{{--<div class="result">--}}
    {{--@foreach($comments as $key => $comment)--}}
        {{--<h2>{{ $caption[$key] }}</h2>--}}
        {{--<p>{!! nl2br(e($comment)) !!}</p>--}}
    {{--@endforeach--}}
{{--</div>--}}

<style>
    body {
        padding: 0 10%;
        font-family: 'Sawarabi Gothic', sans-serif;
        background: #fff8f8;
    }
    h1 {
        text-align: center;
        font-weight: bold;
        color: #6091d3;/*文字色*/
    }
    .result {
        padding: 0.5em 1em;
        margin: 2em 0;
        font-weight: bold;
        color: #6091d3;/*文字色*/
        background: #FFF;
        border: solid 3px #6091d3;/*線*/
        border-radius: 10px;/*角の丸み*/
    }
    .result p {
        margin: 0;
        padding-bottom: 1em;
    }
</style>
@php
    collect($resultset)->map(function ($documents){
    $title = '<div class="result">'.'<h2>'.$documents->title[0].'</h2>';
    $comment = '<p>'.$documents->comment[0].'</p>'.'</div>';;
    echo $title, $comment;
    });
@endphp
