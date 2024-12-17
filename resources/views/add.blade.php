@extends('layout')
@section('content')
<div class=" container" >
    <div class="bg-white col-sm-5" >
      <h1>Add new Restaurant</h1>
    <form action="add" method="post">
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
            <label  class="form-label">Address</label>
            <input type="text" name="address" class="form-control"  aria-describedby="emailHelp">
          </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</div>
@endsection