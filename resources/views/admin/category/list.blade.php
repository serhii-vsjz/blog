<ul>
    @foreach($categories as $category)
        <li>
            <h3>{{ $category->name }}</h3>
            <a href="{{ route('category_edit', ['id' => $category->id ]) }}">edit</a>
            <a href="{{ route('category_delete', ['id' => $category->id ]) }}">delete</a>
            <a href="{{ route('category_publish', ['id' => $category->id ]) }}">delete</a>
        </li>
        <hr>
    @endforeach
</ul>