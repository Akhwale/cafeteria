@extends('layouts.admin')
@section('title','Edit Items')
@section('heading','Edit Items')
@section('content')
<div class=" text-light w-75 ms-5 position-relative pt-5 pb-5 end-0" style="background-color:black">
    <form action={{ url('/edit',$data->id) }} method='post' enctype='multipart/form-data'>
     
    @csrf
    <div class=" container pb-3 pt-2 ">
     <div class="pb-2 ">  
        <label>Product Name:</label><br>
        <input type='text' name='name' value='{{ $data->name }}'/>
     </div>

     <div class="pb-2 position:relative float-end ">
        <label>Exising Product Image:</label><br>
        <img style="width:200px; height:200px;" src='{{url('/itemimages/'.$data->image)}}'/>
     </div>

     <div class="pb-2 ">
        <label>Product Image:</label><br>
        <input type='file' name='image'/>
     </div>

     <div class="pb-2 ">
        <label>Description:</label><br>
        <input type='text' name='description' value='{{ $data->description }}'/>
     </div>

     <div class="pb-2 ">
        <label>Price:</label><br>
        <input type='text' name='price' value='{{ $data->price }}'/>
     </div>
     
     <div>
        <input type='submit' class="w-25 btn-primary mt-4" value="Submit">
     </div>
    </div>
  </form>
</div>
@endsection