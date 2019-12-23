@extends('layouts.app')
@section('content')
    <ul>
        @foreach($categories as $category)
            <li style="border: 1px red solid">
                <h4 style="color: white">{{ $category->name }}</h4>

                <form action="{{ route('edit_category', ['id' => $category->id ]) }}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="submit" value="edit">
                </form>

                <form action="{{ route('delete_category', ['id' => $category->id ]) }}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="submit" value="delete">
                </form>

            </li>
            <hr>
        @endforeach
    </ul>
@endsection