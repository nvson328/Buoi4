<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label for="">Slug</label>
    <input type="text" name="slug"><br>
    <label for="">Title</label>
    <input type="text" name="title"><br>
    <label for="">Content</label>
    <input type="text" name="content"><br>

    <button type="submit">Đồng ý</button>
</form>
