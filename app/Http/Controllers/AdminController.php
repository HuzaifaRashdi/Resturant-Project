<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();

        return view("admin.user",compact("data"));
    }

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        
        return redirect()->back();
    }

    public function foodmenu()
    {
        $data=user::all();

        return view("admin.foodmenu");
    }

    public function upload(Request $req)
    {
        $data=new food;
        $image=$req->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $req->image->move('foodimage',$imagename);

        $data->image=$imagename;

        $data->title=$req->title;

        $data->price=$req->price;

        $data->description=$req->description;

        $data->save();

        return redirect()->back()->with('message','Product Added Succesfully');

      
    }


}