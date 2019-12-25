@extends('layouts.app')

@section('content')
    <h1 style="border: solid 1px red">{{ $post->title }}</h1>
    <br>


    <p style="border: solid 1px red">{{ $post->preview }}</p>
    <br>
    <p style="border: solid 1px red">{{ $post->content }}</p>
    <br>
    <p style="border: solid 1px red"><a href="{{ route('show_category', ['categoryId' => $post->category->id]) }}">{{ $post->category->name }}</a></p>
@endsection