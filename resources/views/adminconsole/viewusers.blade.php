@extends('layouts.admin')
@section('title','View Users')
@section('heading','Registered User Accounts')
@section('content')
<table class="table table-dark table-hover table-striped table-borderd  w-75 ms-5">
    <tr class="text-warning">
      <th>#Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Action</th>
    </tr>  

@foreach($data as $data)
<tr>
    <td>{{ $data->id }}</td>
    <td>{{ $data->name }}</td>
    <td>{{ $data->email }}</td>
    <td><a href="" class="btn btn-primary btn-sm pt-0">Edit</a>
      <a href="" class="btn btn-danger btn-sm pt-0">Delete</a>
    </td>    
</tr>
@endforeach
</table>
@endsection