<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Foodchefs;
use App\Models\Cart;
use App\Models\Order;
class HomeController extends Controller
{
    public function index()
    {
        $data=food::all();
        $count = cart::count();
        $data2=foodchefs::all();
        return view("home",compact("data","data2","count"));
    }

    public function redirect()
    {
        
        $data=food::all();

        $data2=foodchefs::all();

        $usertype= Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.adminhome');
        }
        else
        {
            $user_id=Auth::id();
            $count=cart::where('user_id',$user_id)->count();


            return view('home',compact('data','data2','count'));
        }
    }

    public function addcart(Request $req , $id)
    {
        if(Auth::id())
        {
            $user_id=Auth::id();
            
            $foodid=$id;

            $quantity=$req->quantity;

            $cart=new cart;

            $cart->user_id=$user_id;
            
            $cart->food_id=$foodid;
            
            $cart->quantity=$quantity;

            $cart->save(); 
            
            return redirect()->back();
        }

        else
        {
            return redirect("/login");
        }
    }

    public function showcart(Request $req , $id)
    {

        $count=cart::where('user_id',$id)->count();

        if (Auth::id()==$id)
        {

    
          $data2=cart::select('*')->where('user_id','=',$id)->get();
        
          $data=cart::where('user_id',$id)->join('food','carts.food_id','=','food.id')->get();

       
          view('showcarts',compact('count','data','data2'));

        }

        else
        {
            return redirect()->back();
        }
    }

    public function remove($id)

    {
        $data=cart::find($id);

        $data->delete();
        
        return redirect()->back();

    }

    public function oderconfirm(Request $req)

    {
        // return $req;
        
            // $foodnames = json_encode ($req->foodname);
            // $prices = json_encode ($req->price);
            // $quantities = json_encode ($req->quantity);
            foreach($req->foodname as $key =>$foodname)
            {

            $data=new order;

            $data->foodname=$foodname;
            $data->price=$req->price[$key];
            $data->quantity=$req->quantity[$key];
            $data->name=$req->name;
            $data->phone=$req->phone;
            $data->address=$req->address;

            $data->save();
        }
            return redirect()->back();

        

    }
}
