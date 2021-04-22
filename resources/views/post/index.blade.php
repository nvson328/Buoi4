<h1>Hiển thị danh sách title:</h1>
<table border="1px solid black" >
    <tr>
        <th>ID</th>
        <th>Slug</th>
        <th>Title</th>
        <th>Content</th>
        <th>Tag</th>
        <th colspan="2">Chức năng</th>
        
    </tr>
    @foreach ($posts as $rs)
       
        <tr>
            <td>{{ $rs->id }}</td>
            <td>{{ $rs->slug }}</td>
            <td>{{ $rs->title }}</td>
            <td>{{ $rs->content }}</td>
            <td>
            @foreach ($rs->categories as $cate)
            {{ $cate->name.' ' }}
            @endforeach
            </td>
            <td><a href="{{ route('post.edit',$rs->id) }}" >Sửa</a></td>
            <td><a href="{{ route('post.destroy',$rs->id) }}" onclick="return confirm('Bạn có muốn xoá không???')" >Xoá</a></td>
        </tr>
    
    @endforeach
</table>
<a href="{{ route('post.create') }}">Thêm mới</a>

