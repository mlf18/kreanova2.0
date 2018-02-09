@extends('content.template.app')

@section('content')
<div class="container">
    <div class="card card-login mx-auto mt-5" style=" margin:100px;">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Username </label>
            <input class="form-control" id="Username" type="text" aria-describedby="UsernameHelp" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
          </div>
          
          <a class="btn btn-primary btn-block" href="index.html">Login</a>
        </form>
        
      </div>
    </div>
  </div>
  @endsection
