@extends('layouts.master')

@section('content')


        <div style="width: 100%; height: 20px;"></div>

    @foreach ($posts as $post)
        <a href="/posts/{{ $post->id }}">
        <article class="article">
            <h2>{{ $post->title }}</h2>

            <p>{!! html_entity_decode(nl2br(e(str_limit($post->content, 200)))) !!}</p>
            <div style="height: 16px"></div>


            <span style="color: #ccc; float: right; font-size: 12px; font-weight: bold; z-index: 0;">Aug 28th, 2016</span>
            <div class="clear"></div>
        </article>
        </a>


        <div style="width: 100%; height: 1px; background: #ccc;"></div>
        <div style="width: 100%; height: 20px;"></div>
    @endforeach

@endsection