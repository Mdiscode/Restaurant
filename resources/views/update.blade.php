@extends('layout')
@section('content')
<div class="col-sm-6">
    <h1>Add new Restaurant</h1>
    <form action="/upd" method="post">
        @csrf 
        <div class="mb-3">
          <label  class="form-label">Name</label>
          <input type="hidden" name="id" class="form-control" value="{{$data->id}}" aria-describedby="emailHelp">
          <input type="text" name="name" class="form-control" value="{{$data->name}}" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label  class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control" value="{{$data->email}}"  aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label  class="form-label">Address</label>
            <input type="text" name="address" class="form-control" value="{{$data->address}}" aria-describedby="emailHelp">
          </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection