@extends('layout')
@section('content')
<div class="col-sm-6 bg-white container" style="width:17rem; border-radius:5px;">
    <h1>Login NOw</h1>
    <form action="login" method="post">
        @csrf 
        <div class="mb-3">
          <label  class="form-label">UserName</label>
          <input type="text" name="name" class="form-control"  aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" name="password" class="form-control"  aria-describedby="emailHelp">
          </div>
          
        
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
</div>
@endsection