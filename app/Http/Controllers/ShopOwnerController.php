<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagorymodel;
use DB;
class ShopOwnerController extends Controller
{
    //===============Catagory Controller============
    public function catagory(){
      //  $catagory=DB::table('book_catagories')->get();
       // return view('Catagory',['book_catagories'=>$catagory]);
       return view('Catagory.Catagory');
    }


    public function getCatagoryList(){
      return[
        ['Id'=>1,'Name'=>'EEE'] ,

        ['Id'=>2,'Name'=>'CSE'] 
      

     ];
    }

    public function allcatagory(){
     
      /*$catagories=[
         ['Id'=>1,'Name'=>'EEE'] ,

         ['Id'=>2,'Name'=>'CSE'] 
       

      ];*/

     // $catagories=$this->getCatagoryList();

      $catagories = DB::table('book_categories')->get();
       return view('Catagory.AllCatagory')->with('allcatagory',$catagories);
    }
    

   public function create(){
     return view('Catagory.CreateCatagory');
   }

   public function store(Request $req){
    DB::table('book_categories')->insert(
      ['CategoryName' =>$req->CatagoryName]
  );
    return redirect('/AllCatagory');
    //return dd($req);
  }
     
      
      public function insert(Request $req){
        $catagories =  new catagories;
         $catagorymodel->CategoryName= $req->CategoryName; 
        // $user->name         = $req->name; 
        // $user->cgpa         = $req->cgpa; 
        // $user->password     = $req->password; 
        // $user->type         = 'admin'; 
        // $user->dept         = 'CSE'; 
        // $user->profile_img  = '';
        // $user->save();

       /* if($req->hasFile('image')){
            $file = $req->file('image');
            // echo "file name: ".$file->getClientOriginalName()."<br>";
            // echo "file extension: ".$file->getClientOriginalExtension()."<br>";
            // echo "file Mime Type: ".$file->getType()."<br>";
            // echo "file Size: ".$file->getSize();

            if($file->move('upload', 'abc.'.$file->getClientOriginalExtension())){
                echo "success";
            }else{
                echo "error..";
            }

        }else{
            echo "file not found!";
        }*/

        return redirect('Catagory.AllCatagory');
       // ->route('user.list');
    }
 

   
    
    

      /*$details=[
        ['id'=>1,'Name'=>'EEE']
      ];*/
       
     
    
    
    public function catagory_edit(catagorymodel $catagory, $Id){
      $catagory = DB::table('book_categories')->where('CategoryId', $Id)->get();
     

      return view('Catagory.CatagoryEdit')->with('catagory',$catagory);

     // return view('Catagory.Catagory');
   }
   
    
   /* public function update(Request $req, $Id){
    $catagories= catagorymodel::find($Id);
    $catagories->CategoryName = $req->CategoryName;
   
    $catagories->save();

    return redirect('/AllCatagory');
}*/





   public function catagory_update(Request $request, catagorymodel $catagory, $Id){
     
   
    $result = DB::table('book_categories')
    ->where('CategoryId', $Id)
    ->update([
        'CategoryName'=>$request->CategoryName
        
    ]) ;


     if($result){

    return redirect('/AllCatagory');
     }
    /*else {
    return redirect('/AllCatagory');
    //return dd($result);
    }*/
   

   // return view('Catagory.Catagory');
   }

 public function catagory_delete( $id){
      
  echo $id;

 // return view('Catagory.Catagory');
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


   public function allbook(){
     return view('Book.book_list');
   }




    public function book(){
      return view('ShopBooks');
    }

    public function bookdealer(){
      return view('Dealer');
    }

    public function bookdeal(){
      return view('Deal');
    }
    



    
    public function Owner(){
      return view('OwnerIdentity');
    }
}
