@extends('layouts.admin')


@section('content')


<img src="{{$post->cover_image}}" alt="{{$post->title}}">
<h1>{{$post->title}}</h1>
<div class="metadata">
    Category: {{$post->category ? $post->category->name : 'Nessuna Categoria'}}
</div>
<div class="content">
    {{$post->content}}
</div>

@endsection
