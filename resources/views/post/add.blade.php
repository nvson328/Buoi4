<form action="" method="POST">
    @csrf
    <label for="">Slug</label>
    <input type="text" name="slug"><br>
    <label for="">Title</label>
    <input type="text" name="title"><br>
    <div>
        <select name="category_post" id="" >
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
        </select>
    </div>

    <button type="submit">Đồng ý</button>
</form>
