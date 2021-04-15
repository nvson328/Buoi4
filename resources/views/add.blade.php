<form action="{{ Route('add-prod') }}" method="POST">
    @csrf
    <label for="">Slug</label>
    <input type="text" name="slug">
    <label for="">Title</label>
    <input type="text" name="title">
    <button type="submit">Đồng ý</button>
</form>