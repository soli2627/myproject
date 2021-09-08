<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Restaurant;  
use Session;
class RestaurantController extends Controller
{
      /**
       * 
       */
    public function index()
    {
        return view('home');
    }

    public function list()
    {    $data = Restaurant::paginate(8);
         return view('resturantList',compact('data'));
    }

    public function about()
    {
        return "this is about page";
    }

    public function add()
    {
        return view('addResturant');
    }

    public function store(Request $request)
    { 
        //dd($request->all());
        $validated = $request->validate([
            'name' => 'required|max:55',
            'email' => 'required|unique:restaurants',
            'address' => 'required',
            'profile' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->profile->extension();   
        $request->profile->move(public_path('images'), $imageName);
        $restuData = new Restaurant();
        $restuData->name = $request->name;
        $restuData->email = $request->email;
        $restuData->address = $request->address;
        $restuData->profile = $imageName; 
        $restuData->save(); 
        Toastr::success('Resturant added successfully :)','Success');
        return  redirect('list');
    }

    public function destory(Request $request)
    {
       //echo $request->id;
       $deleteRestu = Restaurant::where('id',$request->id)->delete();
       if($deleteRestu)
       {
        Toastr::success('Resturant deleted successfully :)','Success');
        return  redirect('list');
       }
       else
       {
        Toastr::error('Resturant not deleted :)','Danger');
        return  redirect('list');
        
       }
    }
    public function edit(Request $request)
    {
        //echo $request->id;
        $restu = Restaurant::where('id',$request->id)->get();
        return view('editResturant', compact('restu'));
    }

    public function update(Request $request)
    { 
        
        $restuData = Restaurant::find($request->id);
        $imageName = time().'.'.$request->profile->extension();   
        $request->profile->move(public_path('images'), $imageName);
        $restuData->name = $request->name;
        $restuData->email = $request->email;
        $restuData->address = $request->address;
        $restuData->profile = $imageName; 
        $restuData->update();
        if($restuData){
            Toastr::success('Resturant updated successfully :)','Success');
            return  redirect('list');
        }
        else
        {
            Toastr::error('Resturant not Updated :)','Danger');
            return  redirect('list');
        }
    }

    public function search()
    {
        return "this is search page";
    }
}
