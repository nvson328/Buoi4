  
<form action="{{ route('edit-prod',$post->id) }}" method="POST">
    @csrf
    {{-- <label for="" >id</label>
    <input name="id" value="{{ $_GET['id'] }}" type="text"> --}}
    <label for="">Slug</label>
    <input type="text" name="slug" value=" {{ $post->slug }}" >
    <label for="">Title</label>
    <input type="text" name="title" value=" {{ $post->slug }}">
    <button type="submit">Đồng ý</button>
  
</form>