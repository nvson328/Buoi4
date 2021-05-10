<div class="container" style="border: 1px solid #337ab7;width: 350px;margin-top: 30px;padding: 30px;">
    <form class="form-inline" action="{{route('sendemail')}}" method="POST">
    @csrf
      <label class="" for="inlineFormInputName2">Your Email:</label>
      <input type="text" class="form-control mb-2 mr-sm-2" id="" name="email" placeholder="">
      @error('error')<div class="alert alert-danger" role="alert">{{$message}}</div>@enderror
      <br>
      <center><button type="submit" name="submit" class="btn btn-primary mb-2">Submit</button></center>

    </form>
</div>
