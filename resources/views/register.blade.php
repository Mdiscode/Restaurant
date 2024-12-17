@extends('layout')
@section('content')
<div class="col-sm-6 bg-white container" style="border-radius:5px;">
    <h1>Register Now</h1>
    @if (session('msg'))
<div class="alert alert-success" role="alert">
    {{session('msg')}} 
  </div>
@endif
    <form action="register" method="post">
        @csrf 
        <div class="mb-3">
          <label  class="form-label">Name</label>
          <input type="text" name="name" class="form-control"  aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label  class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control"  aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" name="password" class="form-control"  aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label  class="form-label">Contact</label>
            <input type="number" name="contact" class="form-control"  aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection