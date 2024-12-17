@extends('layout')

@section('content')
<div class="container bg-white" >

  <h1>List of Restaurant </h1>
  <form action="search" method="get">
    <input type="search" name="search" placeholder="search width name" value="{{@$val}}">
    <button>search</button>
  </form>
{{-- {{print_r($data)}} --}}
@if (session('msg'))
<div class="alert alert-success" role="alert">
    {{session('msg')}} 
  </div>
@endif
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th>Operation</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->address}}</td>
        <td><a href="delete/{{$item->id}}"><i class="fa-solid fa-trash-can"></i></a>
        <a href="edit/{{$item->id}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>


</div>
@endsection