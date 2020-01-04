<form method="post" enctype="multipart/form-data">
    @csrf
    <label for="title">Title</label>
    <input name="title" id="title" type="text"/>

    <label for="preview">Preview</label>
    <textarea name="preview" id="preview"></textarea>

    <label for="content">Content</label>
    <textarea name="content" id="content"></textarea>

    <label for="category_id">Category</label>

    {{-----------test-------------}}
    <div style="background-color: #5a6268">
        <p>Select a category:</p>

        @foreach($categories as $category)
        <div>
            <input type="checkbox" id="{{ $category->id }}" name="{{ $category->name }}">

            <label for="{{ $category->id }}">{{ $category->name }}</label>
        </div>
        @endforeach
    </div>
    {{--------------------------------}}

{{--    <select name="category_id" id="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>

        @endforeach
    </select>--}}

    <label for="poster">Poster</label>
    <input type="file" name="poster">
    <input type="submit" value="Create post"/>
</form>

<script>
    var expanded = false;

    function showCheckboxes() {
        var checkboxes = document.getElementById("checkboxes");
        if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
        } else {
            checkboxes.style.display = "none";
            expanded = false;
        }
    }
</script>
<style>
    .multiselect {
        width: 300px;
    }

    .selectBox {
        position: relative;
    }

    .selectBox select {
        width: 300px;
        font-weight: bold;
    }

    .overSelect {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
    }

    #checkboxes {
        display: none;
        border: 1px #dadada solid;
    }

    #checkboxes label {
        display: block;
    }

    #checkboxes label:hover {
        background-color: #1e90ff;
    }
</style>