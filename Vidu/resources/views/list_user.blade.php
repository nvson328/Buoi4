<h1>Danh sách user:</h1>
<form action="{{ route('search') }}" method="POST">
    @csrf
    <input type="text" name="search" id="">
    <button type="submit">Tìm kiếm</button>
</form>
<table class="table" border="1px">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    @foreach ($list as $list)      
    <tbody>
         
            <tr>
                <td>{{ $list -> id }}</td>
                <td>{{ $list -> name }}</td>
                <td>{{ $list -> email }}</td>
            </tr>
    </tbody>
    @endforeach
  </table>