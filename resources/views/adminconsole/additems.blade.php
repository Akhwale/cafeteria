@extends('layouts.admin')
@section('title','Add Items')
@section('heading','Add Items')
@section('content')
<div class="text-light w-75 vh-100  position-relative  top-0 end-0">
    <form action={{ url('itemsupload') }} method='post' enctype='multipart/form-data'>
      
    @csrf
    <div class=" container pb-3 pt-2 ps-5">
     <div class="pb-2 ">  
        <label>Item Name:</label><br>
        <input type='text' name='name' placeholder='Enter a menu item'/>
     </div>

     <div class="pb-2 ">
        <label>Item's Image:</label><br>
        <input type='file' name='image'/>
     </div>
     
      <select class="form-select" name="category" aria-label="Default select example">
         <option selected>Select Category</option>
         <option value="Food">Food</option>
         <option value="Drink">Drink</option>
       </select>

     <div class="pb-2 ">
        <label>Description:</label><br>
        <input type='text' name='description' placeholder='E.g. Wet Fry'/>
     </div>

     <div class="pb-2 ">
        <label>Price:</label><br>
        <input type='text' name='price' placeholder='E.g. 200'/>
     </div>
     
     <div>
        <input type='submit' class="w-25 btn-primary mt-4" value="Submit">
     </div>
    </div>

    </form>
  </div>
@endsection