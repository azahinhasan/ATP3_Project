<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Profile;

class ProfileController extends Controller
{
    //
    public function index(){
        $users = DB::table('users')->get();
        return view('Profile.user_list',compact('users'));
    }

    public function create(){
        return view('Profile.add_profile');
    }

    public function store(Request $req){
                
       
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
         return redirect('/user_list');

      }
      else
      {
         //return dd($req);
      }
        //return redirect('/book_list');
      //  return dd($req);
      }
         
      public function book_destroy(Book $book, $Id){
       
        $result = DB::table('books')->where('Id', '=', $Id)->delete();
        if ($result) {
            return redirect('/book_list');
        } else {
            return " Failed to delete";
        }

      }

}
