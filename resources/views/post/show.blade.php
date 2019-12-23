@extends('layouts.app')

@section('content')
    <h1 style="border: solid 1px red">{{ $post->title }}</h1>
    <br>


    <p style="border: solid 1px red">{{ $post->preview }}</p>
    <br>
    <p style="border: solid 1px red">{{ $post->content }}</p>
    <br>
    <p style="border: solid 1px red">{{ $post->category->name }}</p>
@endsection