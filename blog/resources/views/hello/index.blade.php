
@extends('layout')

@section('content')

    <p>本文のコンテンツ</p>
    <p>
        Controller value<br/>
        * message: {{$message}}
    </p>

    <p>
        ViewComposer value <br/>
        * view_message: {{$view_message}}
    </p>

@endsection