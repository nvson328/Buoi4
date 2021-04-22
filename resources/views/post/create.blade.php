<form action="{{ route('post.store') }}" method="POST">
    @csrf
    <label for="">Slug</label>
    <input type="text" name="slug"><br><br>
    <label for="">Title</label>
    <input type="text" name="title"><br><br>
    <label for="">Content</label>
    <input type="text" name="content"><br><br>
    <label for="">Danh mục</label>
    <div>
        <select name="category" id="" >
            @foreach ($cate as $rs)              
                    <option value="{{ $rs->id }}">{{ $rs->name }}</option>
            @endforeach
        </select>
    </div><br>
    <button type="submit">Đồng ý</button>
</form>