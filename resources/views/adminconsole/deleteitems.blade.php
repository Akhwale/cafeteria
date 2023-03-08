@extends('layouts.admin')
@section('title','Delete Items')
@section('heading','Delete Items')
@section('content')
<table class="table table-dark table-hover table-striped table-borderd w-75 ms-5">
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
    <td>{{ $data->name}}</td>
    <td>{{ $data->category }}</td>
    <td>{{ $data->description }}</td>
    <td>{{ $data->price }}</td>
    <td><a href="" class="btn btn-success btn-sm pt-0">View image</a>
        <a href="{{ url('/delete',$data->id) }}" class="btn btn-danger btn-sm pt-0">Delete</a>
    </td>
    </tr>
@endforeach
</table>
@endsection