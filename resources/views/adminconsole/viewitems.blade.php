@extends('layouts.admin')
@section('title','View Items')
@section('heading','View Items')
@section('content')
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
    <tr>

      <td>{{ $data->id }}</td>
      <td>{{ $data->name }}</td>
      <td>{{ $data->category }}</td>
      <td>{{ $data->description }}</td>
      <td>{{ $data->price}}</td>
      <td><a href="{{ url('/viewimage') }}" class="btn btn-primary btn-sm pt-0">View Image</a>
      <a href="{{ url('/edititems',$data->id) }}" class="btn btn-warning btn-sm pt-0">Edit</a></td>

    </tr>
   @endforeach
  </table>
@endsection