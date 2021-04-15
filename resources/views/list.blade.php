<h1>Hiển thị danh sách title:</h1>
<table border="1px solid black" >
    <tr>
        <th>ID</th>
        <th>Slug</th>
        <th>Title</th>
        <th colspan="2">Chức năng</th>
        
    </tr>
    @foreach ($posts as $rs)
    <tr>
        <td>{{ $rs->id }}</td>
        <td>{{ $rs->slug }}</td>
        <td>{{ $rs->title }}</td>
        <td><a href="/edit{{ $rs->id }}" >Sửa</a></td>
        <td><a href="/del{{ $rs->id }}" >Xoá</a></td>
    </tr>
    @endforeach
</table>
<a href="{{ URL::to('add') }}">Thêm mới</a>