<h1>Kết quả tìm được:</h1>
<table class="table" border="1px">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    @foreach ($rs as $rs)      
    <tbody>
         
            <tr>
                <td>{{ $rs -> id }}</td>
                <td>{{ $rs -> name }}</td>
                <td>{{ $rs -> email }}</td>
            </tr>
    </tbody>
    @endforeach
  </table>
<a href="{{ URL::to('/list') }}">Quay lại</a>