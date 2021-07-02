<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Deal;
use DB;
class DealController extends Controller
{
    //
    public function index(){
        $deals= DB::table('deal')->get();
        return view('Deal.deal_list',compact('deals'));
    }
    
    public function deal_create(){
        return view('Deal.add_deal');
    }

    public function store(Request $req){


        $validated = $req->validate([
            'Customer_Name' => 'required',
            'Customer_Address'=>'required',
            'Book_Name'=>'required',
            'Total_Book'=>'required',
            'Phone_No'=>'required'

           
            
        ]);

        $result= DB::table('deal')->insert(
            ['Customer_Name'=> $req->Customer_Name,
  
            'Customer_Address'=> $req->Customer_Address,
  
            'Book_Name'=> $req->Book_Name,
  
            'Total_Book'=> $req->Total_Book,
            'Phone_No'=> $req->Phone_No
                    
    
          ]
          
          
          
        );
                 
       
        if($result){
           return redirect('/deal_list');
  
        }
        else
        {
           //return dd($req);
           
           return redirect('/deal_list');
         
        }
    }

    public function deal_destroy(Deal $deal, $Deal_Id){
       
        $result = DB::table('deal')->where('Deal_Id', '=', $Deal_Id)->delete();
        if ($result) {
            return redirect('/deal_list');
        } else {
            return " Failed to delete";
        }
    
      }



      public function deal_edit(Deal $deal, $Deal_Id){
         
        $deals = DB::table('deal')->where('Deal_Id', $Deal_Id)->get();
        return view('Deal.edit_deal')->with('updatedeal',$deals);
        
       }

       public function deal_update(Request $request, Deal $deal, $Deal_Id){

        $result = DB::table('deal')
        ->where('Deal_Id', $Deal_Id)
        ->update([
        
        'Customer_Name'=> $request->Customer_Name,
  
        'Customer_Address'=> $request->Customer_Address,

        'Book_Name'=> $request->Book_Name,

        'Total_Book'=> $request->Total_Book,
        'Phone_No'=> $request->Phone_No

        ]) ;

        if($result){

            return redirect('/deal_list');
             }

             else{
                 return redirect('/deal_list');
             }
       }

}


