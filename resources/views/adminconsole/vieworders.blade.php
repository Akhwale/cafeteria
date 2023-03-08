@extends('layouts.admin')
@section('title','View Orders')
@section('heading','View Orders')
@section('content')

<table class="table table-dark table-hover table-striped table-borderd">
    <tr class="text-warning">
    <td>Tracking No</td> 
    <td>Order date</td>
    <td>Time</td>
    <td>Client's Name</td>
    <td>Contact</td>
    <td>AMT Recieved</td>
    <td>Status</td>
    <td>Action</td>
    </tr>

    @foreach($orders as $order)
    <tr>
      <td>{{ $order->tracking_no }}</td>
      <td>{{ date('d-m-y', strtotime($order->created_at))}}</td>
      <td>{{ $order->created_at->format('H:i:s') }}</td>
      <td>{{ $order->name }}</td>
      <td>{{ $order->phone }}</td>
      <td>{{ $order->total_price }}</td>
      <td>{{ $order->status == '0'?'pending' : 'completed'}}</td>
      <td><a href="{{ url('vieworderitems',$order->id) }}" class="btn btn-sm btn-primary pt-0">view items</a></td>
    </tr>
    @endforeach
  </table>
  @endsection