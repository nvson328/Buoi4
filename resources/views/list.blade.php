<h1>Hiển thị danh sách title:</h1>
@foreach ($posts as $rs)
    {{ $rs->title.", " }}
@endforeach