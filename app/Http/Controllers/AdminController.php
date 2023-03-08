<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Order;
use App\Models\User;
use App\Models\Orderitem;

class AdminController extends Controller
{
    public function adminconsole(){
        $count= Item::all()->count();
        $count2= User::all()->count();
        return view('adminconsole.sscradmin',compact("count","count2"));
    }

    public function additems(){
        return view('adminconsole.additems');
    }

    public function uploaditems(Request $request){
        $data= new item;

        if($request->hasfile('image')){

        $file=$request->file('image');
        $filename=time().'.'.$file->getClientOriginalExtension();
        $file->move('itemimages',$filename);
        
        $data->image=$filename;
    }

        $data->name=$request->input('name');
        $data->category=$request->input('category');
        $data->description=$request->input('description');
        $data->price=$request->input('price');
        $data->save();

        return redirect()->back();
    }

    public function viewitems(){

        $data = Item::all();
        $count= Item::all()->count();

    return view('adminconsole.viewitems',compact("data"));
    }

    public function editview($id){

        $data=Item::find($id);

        return view('adminconsole.edititems',compact("data"));

    }

    public function edit(Request $request, $id){

        $data=Item::find($id);
        

        if($request->hasfile('image')){

        $file=$request->file('image');
        $filename=time().'.'.$file->getClientOriginalExtension();
        $file->move('itemimages',$filename);
        
        $data->image=$filename;
    }
        $data->name=$request->input('name');
        $data->category=$request->input('category');
        $data->description=$request->input('description');
        $data->price=$request->input('price');
        $data->save();

        return redirect()->back();
    }

    public function deleteitems(){

        $data= Item::all();
        
        return view('adminconsole.deleteitems',compact("data"));
    }
 

    public function delete($id){

        $data=Item::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function viewusers(){
        $data= User::all();
        
        return view('adminconsole.viewusers',compact("data"));

    }

    public function vieworders(){
        $orders=Order::where('status','0')->get();
        
        return view('adminconsole.vieworders',compact("orders"));

    }
    
    public function orderitems($id){
        $orders=Order::where('id',$id)->first();
        
        return view('adminconsole.orderitems',compact("orders"));

    }
}