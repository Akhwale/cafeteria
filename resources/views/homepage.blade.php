@extends('layouts.master')
@section('title',"Homepage")
@section('content')

<!--welcome text-->
    <div class="container d-flex ">
        <h1 class=" d-flex p-2 text-center">Hurry!!! Grab<span style="color: darkorange"> Your Order</span></h1>
        <div class="end-0" >
            <form class="form mt-3 margin-end-0 float-end-0" style="margin-right:0px;" method="get"  action="{{ url('/search')}}">
                <input type="text" name="search" type="search" placeholder="Search by Item Name">
                <input class="btn btn-sm btn-primary" type="submit" value="Search">
            </form>
        </div> 
    </div>
    <!-- products-->
    <div class="container">     
        <div class="row"> 

          @foreach($data as $data)
     
          <div class="col-md-3">
          <form action="{{ url('/addtocart',$data->id) }}" method="post">
            @csrf
              <div class="card mb-3 p-0 rounded-0 bg-light " style="width: 16rem; height:20rem";>
                <img id="pic" src="{{url('/itemimages/'.$data->image)}}"  class="card-img-top" alt="No image Attached to this post">
                  <div id="prodinf" class="card-body p-0">
                    <h5 class="card-title ">{{ $data->name }}</h5>
                    <h6 class="position-absolute top-0 end-0 bg-primary text-light p-2"> $ {{ $data->price }}</h6>
                    <p class="card-text ">{{ $data->description }}</p>
                    <p class=" ">Qty: <span><input class="p-0" type="number" name="quantity" value="1" min="1" style="width:4rem; outline:none"></span><span>
                    <input type="submit" class="btn btn-success btn-sm pb-0" name="AddtoCart" value="Add to Cart"></span></p>
                  </div>
                </div>
          </form>
          </div>
          @endforeach
        </div>
      </div>

@endsection