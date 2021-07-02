<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Countable;
class logincontroller extends Controller
{
    //
    public function login_page(){
        return view('Login.LoginPage');
    }
    public function verify(Request $request)
    {
       
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $result = DB::table('users')
            ->where('email', $request->email)
            ->where('password', $request->password)
            ->first();
           
        if ( $result) {
            $id = $result->id;
            $email=$result->email;
            $name = $result->name;
            $request->session()->put('userid', $id);
            $request->session()->put('email', $email);
            $request->session()->put('userFullName', $name);
            //session(['userid' => $id]);
            //return print_r($result->id);
           return redirect('/ShopOwner');
       
    }

    else{
        redirect('/login');
    }
    

    }
        
}
