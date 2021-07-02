<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

Use App\Models\catagorymodel;
class catagorycontroller extends Controller
{
    //
        
     public function index(){
      return view('Catagory.AllCatagory');
    }
  
     public function create(){
       return view('Catagory.CreateCatagory');
     }
  
     public function store(Request $req){

      $validated = $req->validate([
        'CategoryName' => 'required'
       
        
    ]);
      DB::table('book_categories')->insert(
        ['CategoryName' => $req->CategoryName]
    );
      return redirect('/AllCatagory');
      //return dd($req);
    }
    
    
    public function catagory_edit(catagorymodel $catagory, $Id){
      $categories = DB::table('book_categories')->where('CategoryId', $Id)->get();
     

      return view('Catagory.CatagoryEdit')->with('catagory',$categories);

     // return view('Catagory.Catagory');
   }
   
    
      public function catagory_update(Request $request, catagorymodel $catagory, $Id){
     
   
    $result = DB::table('book_categories')
    ->where('CategoryId', $Id)
    ->update([
        'CategoryName'=>$request->CategoryName
        
    ]) ;


     if($result){

    return redirect('/AllCatagory');
     }
       
     }

     public function catagory_destroy(catagorymodel $catagory, $Id)
    {
        $result = DB::table('book_categories')->where('CategoryId', '=', $Id)->delete();
        if ($result) {
            return redirect('/AllCatagory');
        } else {
            return " Failed to delete";
        }
    }
}