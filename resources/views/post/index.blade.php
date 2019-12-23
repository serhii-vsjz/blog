@extends('layouts.app')
@section('content')
    <table bordercolor="black" cols="4" rules="all">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Category</th>
            <th>Edit</th>
            <th>Delete</th>

        </tr>
        <tbody>
        @foreach($posts as $post)
            <tr @if(!$post->is_published)style="background-color: #c98282" @endif>
                <td>{{ $post->id }}</td>
                <td><a href="{{ route('show',['postId' => $post->id]) }}">{{ $post->title }}</a></td>
                <td>{{ $post->category->name }}</td>
                <td>
                    <form method="post" action="{{ route('edit_post', ['postId' => $post->id]) }}">
                        {{ method_field('put') }}
                        @csrf
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