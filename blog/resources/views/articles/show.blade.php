@extends('layout')

@section('content')

    <h1>{{$article->title}}</h1>
    <hr/>

    <article>
        <div class="body">{{$article->body}}</div>
    </article>
    <br/>

    @unless($article->tags->isEmpty())
        <h5>Tags:</h5>
        <ul>
            @foreach($article->tags as $tag)
                <li>{{$tag->name}}</li>
            @endforeach
        </ul>
    @endunless

    @if (Auth::check())
        {!! link_to(action('ArticlesController@edit', [$article->id]), '編集', ['class' => 'btn btn-primary']) !!}
        <br/>
        <br/>
        {!! delete_form(['articles', $article->id]) !!}
    @endif

@endsection

