@extends('layouts.admin')
@section('title','Orderitems')
@section('heading','View Ordered Items')
@section('content')

  
<table class=" w-75 table table-dark table-hover table-striped table-borderd ms-5">
    <tr class="text-warning">
        <td>Item Name</td>
        <td>Quantity</td>
        <td>Price</td>  
        <td>Total</td>  
    </tr>
    
    @foreach($orders->orderitems as $item)
      <tr>
          <td>{{ $item->items->name }}</td>
          <td>{{ $item->quantity }}</td>
          <td>{{ $item->price }}</td>
          <td>{{ $item->quantity*$item->price }}</td>   
      </tr>
     @endforeach
 
    </table>
    <h5><span style="color:darkorange"># Subtotal | </span>{{ $orders->total_price }}.00</h5> 
    
    <div class=" pt-3 d-flex justify-content-evenly">
      <div>
        <h4 style="border-left:5px solid darkorange;padding-left:20px;">Customer's Details</h4>
        <table class="table table-dark table-hover table-striped table-borderd">
        <tr>
          <td>Customer Name</td>
          <td>{{ $orders->name }}</td>
        </tr>
        <tr>
          <td>Address</td>
          <td>{{ $orders->address }}</td>
        </tr>
        <tr>
          <td>Contact</td>
          <td>{{ $orders->phone }}</td>
        </tr>
        <tr>
          <td>Amount Paid</td>
          <td>{{ $orders->total_price }}</td>
        </tr>
      </table>
      </div>

      <div>
        <h4 style="border-left:5px solid darkorange;padding-left:20px;">Order Status</h4>
        <form action="{{ url('/updatestatus',$orders->id) }}" method="post">
          @csrf
        <select class="form-select" name="status">
          <option {{ $orders->status =='0'? 'selected':'' }}value="0">Pending</option>
          <option {{ $orders->status =='1'? 'selected':'' }}value="1">Completed</option>
        </select><br><br>
        <button class="btn-success"type="submit" name="statusupdate">Update Order status</button>
        </form>
    </div>
  </div>

@endsection