@extends('layouts.app')
@section('content')
    <table bordercolor="black" cols="4" rules="all">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>

        </tr>
        <tbody>
        @foreach($posts as $post)
            <tr @if(!$post->is_active)style="background-color: #c98282" @endif>
                <td>{{ $post->id }}</td>
                <td><a href="{{ route('show_post',['postId' => $post->id]) }}">{{ $post->title }}</a></td>
                <td>{{ $post->category->name }}</td>
                <td>
                    <form action="{{ route('edit_post', ['postId' => $post->id]) }}" method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button href="{{ route('edit_post', ['postId' => $post->id]) }}">edit</button>
                    </form>
                </td>
                <td>
                    <form  action="{{ route('delete_post', ['postId' => $post->id]) }}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="submit" value="x">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="navigate">{{ $posts->links() }}</div>
@endsection