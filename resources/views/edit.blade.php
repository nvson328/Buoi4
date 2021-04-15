<form action="{{ Route('edit-prod') }}" method="POST">
    @csrf
    @method('PUT')
    <label for="">Slug</label>
    <input type="text" name="slug" value="">
    <label for="">Title</label>
    <input type="text" name="title">
    <button type="submit">Đồng ý</button>
</form>