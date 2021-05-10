<div class="container" style="border: 1px solid #337ab7;width: 350px;margin-top: 30px;padding: 30px;">
    <form class="form-inline" action="{{route('act.reset',$user->id)}}" method="POST">
    @csrf
      <label class="" for="inlineFormInputName2">Old Password</label>
      <input type="text" class="form-control mb-2 mr-sm-2" id="" name="oldpassword" placeholder="">
      @error('error')<div class="alert alert-danger" role="alert">{{$message}}</div>@enderror
      <br><br>
      <label class="" for="inlineFormInputGroupUsername2">New Password</label>
      <div class="input-group mb-2 mr-sm-2">
        <div class="input-group-prepend">
          <div class="input-group-text"></div>
        </div>
        <input type="text" class="form-control" id="" name="newpassword" placeholder="">
      </div>
      <label class="" for="inlineFormInputGroupUsername2">Re-New Password</label>
      <div class="input-group mb-2 mr-sm-2">
        <div class="input-group-prepend">
          <div class="input-group-text"></div>
        </div>
        <input type="text" class="form-control" id="" name="renewpassword" placeholder="">
      </div>
      <br>
      <center><button type="submit" name="submit" class="btn btn-primary mb-2">Submit</button></center>

    </form>
</div>
