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
        background: #00FF00;
    }
    h1 {
        text-align: center;
        font-weight: bold;
        color: hotpink;/*文字色*/
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

@foreach($response as $res)
    <div class="result">
        <h2>{{ $res["_source"]["title"] }}</h2>
        <p>{{ $res["_source"]["comment"] }}</p>
    </div>
@endforeach
