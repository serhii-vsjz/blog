{{--@extends('layouts.app')

@section('content')--}}

<form action="{{ route('update_post', ['postId' => $post->id]) }}" method="POST" enctype="multipart/form-data">
    @method('PATCH')
    <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <label for="title">Title</label>
    <input name="title" id="title" type="text" value="{{ $post->title }}"/>

    <label for="preview">Preview</label>
    <textarea name="preview" id="preview" type="text">{{ $post->preview }}</textarea>

    <label for="content">Content</label>
    <textarea name="content" id="content">{{ $post->content }}</textarea>

    <label for="category">Category</label>
    <select name="category" id="category" >
        @foreach($categories as $category)
            <option @if($category->id == $post->category->id) selected @endif value="{{ $category->id }}">
                {{ $category->name }}
            </option>
        @endforeach

    </select>



    <label for="poster">Poster</label>
    <input type="file" name="poster">
    <input type="submit" value="Update post"/>
</form>

{{--
@endsection--}}
