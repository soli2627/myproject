<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Toastr;
use Auth;
class UserController extends Controller
{
    /**
     * Registration
     */
    public function register(Request $request)
    {
        return view('users.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255|string|unique:users,name',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
            'profile' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048' 
        ]);
        if($validator->fails()){
            return response(['error' => $validator->errors(), 'Validation Error']);
        }
        $imageName = time().'.'.$request->profile->extension();   
        $request->profile->move(public_path('users'), $imageName);
        $user = new User;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->address = $request->address;
        $user->profile = $imageName;
        $user->save();
        if($user)
        {  
            Toastr::success('User added successfully :)','Success');  
            return redirect('/');
        }
        else
        {
            Toastr::error('Resturant not added','Error');
            return back();
        }
        
     }
    /**
     * Login
     */
    public function login(Request $request)
    {
        return view('users.login');
    }

    public function userlogin(Request $request)
    {
         $validator = Validator::make($request->all(),[
             'email' => 'required',
             'password' => 'required',
         ]);
         if($validator->fails()){
             return response(['error' => $validator->errors(), 'Validation Error']);
         }
         $user = User::where('email', $request->email)->first(); 
        // print_r($user[0]['email']);die;
        if($user)
        {  
            if($request->email === $user[0]['email'])
            {  
                session()->put('email', $request->email);
                Toastr::success('User logged Successfully','Success');
                return redirect('dashboard'); 
            }else
            { 
                Toastr::error('User not logged in ','Error');
                return back(); 
            }
        } 
        else
         {
            Toastr::error('Email & Password does not exit','Error');
            return back(); 
         }
    }

    /**
     * User Dashboard
     */
    public function dashboard()
    {
        if(session()->has('email'))
        {
            $email = session()->get('email');
            $userData = User::where('email', $email)->get();
             return view('users.dashboard', compact('userData'));
        }
        else
        {
            Toastr::error('Please Firstly sign up ','Error');
            return redirect('login');
        }
    }
    /**
     * User Logout
     */
    public function logout(Request $request){
        if(session()->has('email')){
            session()->pull('email');
        }
        return redirect('login');
    }
}
