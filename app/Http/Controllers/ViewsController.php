<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Orderitem;


class ViewsController extends Controller
{
    public function index(){
        return view('tuksscr');
    }

    public function homepage(){
        $data=Item::all();

        $user_id=Auth::id();
        $count=cart::where('user_id', $user_id)->count(); 
        return view('homepage',compact("data","count"));
    }

    public function drinks(){
        $data=Item::where('category','Drink')->get();

        $user_id=Auth::id();
        $count=cart::where('user_id', $user_id)->count(); 
        return view('drinks',compact("data","count"));
    }

    public function search(){

        $searchtext= $_GET['search'];
        $data= Item::where('name','LIKE','%'.$searchtext.'%')->get();
        $count=Cart::where('user_id',Auth::id())->count();
        return view('search',compact('data','count'));

    }

    public function addtocart(Request $request,$id){

        if(Auth::id())
        {   
            $user_id=Auth::id();
            $item_id=$id;
            $quantity=$request->quantity;

            $cart = new cart;
            $cart->user_id=$user_id;
            $cart->item_id=$item_id;
            $cart->quantity=$quantity;

            $cart->save();
            return redirect()->back();
        }

        else
        {
            return redirect('/login');
            return redirect()->route('homepage');
        }
    }

    public function mycart(){

        
        $count=cart::where('user_id',Auth::id())->count();
        
        $data=cart::where('user_id',Auth::id())->get();
        
        return view('mycart',compact("count","data"));
    }


    public function remove($id){
 
        $data=Cart::find($id);
        $data->delete();
        return redirect()->back();
      
    }


    public function placeorder(Request $request){
        
        $order = new order();

        $order->user_id=$request->input('user_id');
        $order->name=$request->input('name');
        $order->address=$request->input('address');
        $order->phone=$request->input('phone');
        $order->paymentmethod=$request->input('paymentmethod');
        $order->total_price=$request->input('total_price');
        $order->tracking_no= "edu".rand(111,999);
        $order->save();

        $data=cart::where('user_id',Auth::id())->get();
        foreach($data as $data){
            orderitem::create([
                'order_id'=> $order->id,
                'item_id'=> $data->item_id,
                'quantity'=> $data->quantity,
                'price'=> $data->items->price,
            ]);
        }
    }



    public function showinvoice(){

        $orders=Order::all();
        $data=User::where('id',Auth::id())->get();
        $items=Cart::where('user_id',Auth::id())->get();
        return view('invoice',compact('items','data','orders'));
    }
}