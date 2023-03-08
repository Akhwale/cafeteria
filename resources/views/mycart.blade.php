@extends('layouts.master')
@section('title','My Cart')
@section('content')

<div class="col d-block">
  <div class=" text-light w-100  float-end position-relative top-0 end-0" style="background-color:black; border-bottom:5px solid darkorange; border-top:3px solid #F0E68C;">
   <div class="container bg-dark mb-5 mt-5 text-light w-75">
    <h3 style="border-left:5px solid darkorange;padding-left:20px;"> You have {{ $count }} items in your Cart</h3>
  
  <div class="pt-3">
  <table class="table table-dark table-hover table-striped table-borderd">
  
    <tr class="text-warning">
        <th>Name</th>
        <th>#Id</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total</th>
        <th>Action</th>
    </tr>
    @php
      $subtotal=0;
    @endphp
      @foreach ($data as $data)
        <tr class="p-0">
          <td>{{ $data->items->name }}</td>
          <td>{{ $data->item_id }}</td>
          <td>{{ $data->quantity }}</td>
          <td>{{ $data->items->price }}</td>
          <td>{{ $data->quantity * $data->items->price}}</td>
          <td><a href="{{ url('/remove',$data->id) }}" class="btn btn-danger btn-sm pt-0">Remove</a></td>
        </tr>
        
      @php      
        $subtotal += $data->items->price * $data->quantity;
      @endphp
             
      @endforeach     
  </table>
    <h5><span style="color:darkorange"># Subtotal | </span>{{ $subtotal }}.00</h5>
  </div>
  
  
  <div class="text-center pb-5">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#proceed">Proceed To Check Out</button>
  </div>
  
  </div>


  <!-- Modal -->

<div class="modal fade" id="proceed" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content bg-dark">
      <div class="modal-header  border-warning border-4">
        <h5 class="modal-title " id="exampleModalLabel" style="border-left:5px solid #ffc107;padding-left:20px;">Please Enter your contact information</h5></h5>
        <button type="button" class="btn-close btn-danger bg-danger" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="{{ url('checkout') }}" method="post">
  @csrf
  <table class="table table-dark table-hover table-striped">
      
      <input type="text" name='user_id' value="{{ Auth::user()->id}}" hidden>

      <tr>
        <td><label>Name:</label></td>
        <td><input type="text" name="name" value="{{ Auth::user()->name }}"></td>
      </tr>

      <tr>
        <td><label>City/Address:</label></td>
        <td><input type="text" name="address" placeholder="E.g. Nairobi/Starehe"></td>
      </tr>
         
      <tr>
        <td><label>Phone Number:</label></td>
        <td><input type="text" name="phone" placeholder="E.g. +254700000000"></td>
      </tr>
      
      <tr>
        <td><label>Payment Method:</label></td>
        <td><input type="text" name="paymentmethod" placeholder="E.g Paypal/Mpesa"></td>
      </tr>
       
      <tr>
        <td><label>Subtotal</label></td>
        <td><input type="text" name="total_price" value="{{ $subtotal }}" readonly></td>
      </tr>
    </table>
      </div>

      <div class="modal-footer border-warning border-2">
      
        <button type="button" class=" btn-primary" data-bs-dismiss="modal">Close</button>
        
        <button type='submit' class="btn-success" name='checkout'>Checkout</button>
      </div>

      </form>
    </div>
  </div>
</div>

  </div>
</div>

    @endsection