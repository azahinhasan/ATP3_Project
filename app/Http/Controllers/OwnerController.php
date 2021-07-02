<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use DB;

class OwnerController extends Controller
{
    //

    public function Shop_Owner_Page(){
        return view('ShopOwner');
    }


    public function index(){
        $shop= DB::table('shop')->get();
       // return view('Book.book_list',compact('books'));
        return view('ShopOwner.owner_list',compact('shop'));
    }

    public function owner_create(){
        return view('ShopOwner.add_owner');
    }
    



    public function store(Request $req){

      //  return dd($req);
        
      $validated = $req->validate([
        'Shop_Name' => 'required',
        'Shopper_Name'=>'required',
        'Shop_Address'=>'required',
        'Verified_Status'=>'required',
        'Shop_Licence'=>'required',
        'Phone_No'=>'required',
        'User_Id'=>'required'

       
        
    ]);


        $result=DB::table('shop')->insert(
            ['Shop_Name'=> $req->Shop_Name,
  
            'Shopper_Name'=> $req->Shopper_Name,
  
            'Shop_Address'=> $req->Shop_Address,
  
           'Verified_Status'=> $req->Verified_Status,
           'Shop_Licence'=> $req->Shop_Licence,
          
           'Phone_No'=> $req->Phone_No,
          
           'User_Id'=> $req->User_Id
          
          ]
          
                   
        );
         
               
       if($result){
           return redirect('/owner_list');
  
        }
        else
        {
           return redirect('/owner_list');
        }
          //return redirect('/book_list');
        //  return dd($req);
        }
      
    public function owner_destroy(Owner $shop, $Id){

        $result = DB::table('shop')->where('Shop_Id', '=', $Id)->delete();
        if ($result) {
            return redirect('/owner_list');
        } else {
            return " Failed to delete";
        }

       
    }


    public function owner_edit(Owner $owner, $Id){
         
        $owners = DB::table('shop')->where('Shop_Id', $Id)->get();
        return view('ShopOwner.edit_owner')->with('updateowner',$owners);
        
       }

       public function owner_update(Request $request, Owner $owner, $Id){

        $result = DB::table('shop')
        ->where('Shop_Id', $Id)
        ->update([
            'Shop_Name'=> $request->Shop_Name,
  
            'Shopper_Name'=> $request->Shopper_Name,
  
            'Shop_Address'=> $request->Shop_Address,
  
            'Verified_Status'=> $request->Verified_Status,
            'Shop_Licence'=> $request->Shop_Licence,
          
            'Phone_No'=> $request->Phone_No,
          
            'User_Id'=> $request->User_Id
        ]) ;

        if($result){

            return redirect('/owner_list');
             }

             else{
                 return redirect('/owner_list');
             }
       }


    


    

}
