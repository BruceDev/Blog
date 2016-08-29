@extends('layouts.master')

@section('content')
        
        <div style="width: 100%; height: 20px;"></div>
        <div style="width: 100%; height: 1px; background: #ccc;"></div>
        <div style="width: 100%; height: 20px;"></div>

        <article class="article">
            <h2>{{ $post->title }}</h2> <span class="category personal">Personal</span><span class="category project">Project</span>

            <p>{!! html_entity_decode(nl2br(e($post->content))) !!}</p>
        </article>

        <div style="width: 100%; height: 20px;"></div>
        <div style="width: 100%; height: 1px; background: #ccc;"></div>
        <div style="width: 100%; height: 20px;"></div>

@endsection