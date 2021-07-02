<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Registration;

class RegistrationController extends Controller
{
    //
    public function index(){
        return view('Registration.registration');
    }

     
    public function store(Request $req){
                
       
      $validated = $req->validate([
         'name' => 'required',
         'email'=>'required',
         'password'=>'required',
         'user_type'=>'required',
         'gender'=>'required',
         'phone_number'=>'required'
        
         
     ]);


        //return dd($req);
       $result= DB::table('users')->insert(
          ['name'=> $req->name,

          'email'=> $req->email,

          'password'=> $req->password,

          'user_type'=> $req->user_type,
          'gender'=> $req->gender,
        
          'phone_number'=> $req->phone_number
        
       

        ]
         
         
        
      );
       
      
     
      if($result){
         return redirect('/login');

      }
      else
      {
         //return dd($req);
      }
        //return redirect('/book_list');
      //  return dd($req);
      }
         
}
