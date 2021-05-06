<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container" style="border: 1px solid #337ab7;width: 350px;margin-top: 30px;padding: 30px;">
			<form class="form-inline" action="{{route('login')}}" method="POST">
			@csrf
			  <label class="" for="inlineFormInputName2">Username</label>
			  <input type="text" class="form-control mb-2 mr-sm-2" id="" name="email" placeholder="">
			  @error('error')<div class="alert alert-danger" role="alert">{{$message}}</div>@enderror
			  <br><br>
			  <label class="" for="inlineFormInputGroupUsername2">Password</label>
			  <div class="input-group mb-2 mr-sm-2">
			    <div class="input-group-prepend">
			      <div class="input-group-text"></div>
			    </div>
			    <input type="text" class="form-control" id="" name="password" placeholder="">
			  </div>

			  <div class="form-check mb-2 mr-sm-2">
			  	<br>
			    <input class="form-check-input" type="checkbox" id="inlineFormCheck" name="remember">
			    <label class="form-check-label" for="inlineFormCheck">
			      Remember me
			    </label>
			  </div>
			  <br>
			  <center><button type="submit" name="submit" class="btn btn-primary mb-2">Submit</button></center>
			</form>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>