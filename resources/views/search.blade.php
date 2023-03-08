@extends('layouts.master')
@section('title','Search Items')
@section('content')
<h1>Product Search</h1>
<form class="form mt-3 margin-end-0 float-end-0" style="margin-right:0px;" method="get"  action="{{ url('/search')}}">
  <input type="text" name="search" type="search" placeholder="Search by Item Name">
  <input class="btn btn-sm btn-primary" type="submit" value="Search">
</form>
<table class="table table-dark table-hover table-striped table-borderd w-75 ms-5" >
   
    <tr class="text-warning">
      <th>#Id</th>
      <th>Name</th>
      <th>Category</th>
      <th>Description</th>
      <th>Price</th>
      <th>Action</th>
    </tr>  
    
    @foreach($data as $data)
    <form action="{{ url('/addtocart',$data->id) }}" method="post">
      @csrf
    <tr>
      <td>{{ $data->id }}</td>
      <td>{{ $data->name }}</td>
      <td>{{ $data->category }}</td>
      <td>{{ $data->description }}</td>
      <td>{{ $data->price}}</td>
      <td><a href="{{ url('/viewimage') }}" class="btn btn-primary btn-sm pt-0">View Image</a>
        <input type="submit" class="btn btn-success btn-sm pb-0" name="AddtoCart" value="Add to Cart"></span></p>
    </tr>
    </form>

   @endforeach
  </table>
@endsection