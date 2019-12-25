@extends('layouts.app')

@section('content')
    <h2 style="border: solid 1px red">{{ $category->name }}</h2>
    <br>
    <ul>
        @foreach($category->posts as $post)
            <li><a href="{{ route('show_post', ['postId' => $post->id]) }}"><h3>{{ $post->title }}</h3></a></li>

            {{--<td><a href="{{ route('show_category', ['categoryId' => $category->id]) }}">{{ $category->name }}</a></td>--}}


            <li>{{ $post->preview }}</li>
        @endforeach
    </ul>







@endsection