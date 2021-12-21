@extends('master')
@section('content')
<h1>
    login page layout.</h1>
    <button class="btn btn-warning">click on me</button>
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4  col-md-8 mx-auto">
            <form>
  <div class="mb-3 my-4 ">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary mt-2">Login</button>
</form>
            </div>
        </div>
    </div>
    <!-- <script>
        alert('thllo');
    </script> -->

@endsection