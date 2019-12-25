@extends('layouts.app')
@section('content')
    <table bordercolor="black" cols="4" rules="all">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th></th>
        </tr>
        <tbody>
        @foreach($categories as $category)
            <tr @if(!$category->is_active)style="background-color: #c98282" @endif>
                <td>{{ $category->id }}</td>
                <td><a href="{{ route('show_category', ['categoryId' => $category->id]) }}">{{ $category->name }}</a></td>
                <td>
                    <form  action="{{ route('delete_category', ['categoryId' => $category->id]) }}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="submit" value="x">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection