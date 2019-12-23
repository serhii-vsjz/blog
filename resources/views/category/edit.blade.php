<form action="{{ route('update', ['id' => $category->id]) }}" method="post">
    @csrf
    <label for="name">Category name</label>
    <input name="name" id="name" value="{{ $category->name }}" type="text">
    <input type="submit" value="Edit">
</form>
