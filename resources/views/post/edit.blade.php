  
<form action="{{ route('post.update',$rs->id) }}" method="POST">
    @csrf
    @method('PUT')
    {{-- <label for="" >id</label>
    <input name="id" value="{{ $_GET['id'] }}" type="text"> --}}
    <label for="">Slug</label>
    <input type="text" name="slug" value=" {{ $rs->slug }}" >
    <label for="">Title</label>
    <input type="text" name="title" value=" {{ $rs->title }}">
    <label for="">Content</label>
    <input type="text" name="content" value=" {{ $rs->content }}" ><br>
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