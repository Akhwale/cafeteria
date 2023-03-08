@extends('layouts.admin')
@section('title','Admin Console')
@section('heading','Admin Dashboard')
@section('content')


   <!---Dasboard content-->
  <div class=" col d-block " >
   <div class=" text-light w-100 vh-100 float-end position-relative top-0 end-0" style="background-color:black">
     
    <div class="d-flex p-4 justify-content-between ">
    
      <div class="card bg-warning" style="width: 15rem;">
        <div class="card-body">
          <h5 class="card-title text-dark">Number of Items Available</h5>
          <p class="card-text fw-bold">Get a Wide range of Food and Drinks available in the Store. Th number of items available in store:</p>
          <h1 class="card-text fw-bold fs-1 text-dark">{{ $count }}</h1>
          <a href="{{url('/homepage')}}" class="btn btn-primary">Visit Store</a>
        </div>
      </div>
      <div class="card bg-success" style="width: 15rem;">
        <div class="card-body">
          <h5 class="card-title">Number of Esteemed Clients On Board</h5>
          <p class="card-text text-dark fw-bold">Be part of our team. Sit back, Select and Order Food or drinks at your time of convinience</p>
          <h1 class="card-text">{{ $count2 }}</h1>
          <a href="{{ url('/viewusers') }}" class="btn btn-primary">View Users</a>
        </div>
      </div>
      <div class="card bg-danger" style="width: 15rem;">
        <div class="card-body">
          <h5 class="card-title text-dark">Active Orders</h5>
          <p class="card-text">Need to make deliveries on Time? Check out what is lined up for your team. Make Time a Wealthy Resource</p>
          <h1 class="card-text text-dark">count3</h1>
          <a href="{{url('/vieworders') }}" class="btn btn-primary">View Orders</a>
        </div>
      </div>
      <div class="card bg-success" style="width: 15rem;">
        <div class="card-body">
          <h5 class="card-title text-dark">Remove Items from the Menu</h5>
          <p class="card-text fw-bold">Here's a quick solution. Remove Items from the list</p>
          <h1 class="card-text text-dark">count3</h1>
          <a href="{{url('/viewproducts')}}" class="btn btn-primary">Delete Items</a>
        </div>
      </div>
      
      </div>

    </div>
</div>

</div>

@endsection