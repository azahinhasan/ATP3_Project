<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BestSale;
use App\Models\Book;
use DB;

class bestsalecontroller extends Controller
{
    //
    public function index(){
        
        $books = DB::table('books')->get();
        return view('BestSellingBook.Bbook_list',compact('books'));
    }

    public function addbook(){
        return view('BestSellingBook.add_Bbook');
    }

    public function store(Request $req){
        

            
        $validated = $req->validate([
            
            'Name'=> 'required',

            'CategoryId'=> 'required',

            'WriterId'=> 'required',

            'Publisher'=> 'required',
            'Quantity'=> 'required',
        
            'SellerId'=> 'required',
        
            'Price'=> 'required',
            'BookCondition'=> 'required',
            'Language'=> 'required',
            'Rating'=> 'required',
        
          //  'BookSampleImage1'=>'required'

           
            
        ]);
        
      /*  if ($req->hasFile('BookSampleImage1')) {
            $file = $req->file('BookSampleImage1');
            // echo "file name: ".$file->getClientOriginalName()."<br>";
            // echo "file extension: ".$file->getClientOriginalExtension()."<br>";
            // echo "file Mime Type: ".$file->getType()."<br>";
            // echo "file Size: ".$file->getSize();

            $fileName = $req->Name . time() . "." . $file->getClientOriginalExtension();
            if ($file->move('upload', $fileName)) {
                echo "success";
            } else {
                echo "error..";
            }
        } else {
            echo "file not found! ";
        }*/



        //return dd($req);
       $result= DB::table('books')->insert(
          ['Name'=> $req->Name,

          'CategoryId'=> $req->CategoryId,

          'WriterId'=> $req->WriterId,

        'Publisher'=> $req->Publisher,
        'Quantity'=> $req->Quantity,
        
        'SellerId'=> $req->SellerId,
        
        'Price'=> $req->Price,
        'BookCondition'=> $req->BookCondition,
        'Language'=> $req->Language,
        'Rating'=> $req->Rating
        
        // 'BookSampleImage1'=>$req->$fileName



        ]
         
         
        
      );
       
      
     
      if($result){
         return redirect('/Bbook_list');

      }
      else
      {
         //return dd($req);
      }
        //return redirect('/book_list');
      //  return dd($req);
      }

      public function show(BestSale $book, $Id)
      {
          //$product = DB::table('products')->where('product_id', $id)->first();
          $book = BestSale::find($Id);
          //return dd();
          return view('BestSellingBook.detail_bbook')->with('book', $book);
      }
         
      public function book_destroy(BestSale $book, $Id){
       
        $result = DB::table('books')->where('Id', '=', $Id)->delete();
        if ($result) {
            return redirect('/Bbook_list');
        } else {
            return " Failed to delete";
        }

      }


       public function book_edit(BestSale $book, $Id){
         
        $books = DB::table('books')->where('ID', $Id)->get();
        return view('BestSellingBook.edit_Bbook')->with('updatebook',$books);
        
       }

       public function book_update(Request $request, BestSale $book, $Id){

        $result = DB::table('books')
    ->where('ID', $Id)
    ->update([
        'Name'=> $request->Name,

        'CategoryId'=> $request->CategoryId,

        'WriterId'=> $request->WriterId,

        'Publisher'=> $request->Publisher,
        'Quantity'=> $request->Quantity,
        
        'SellerId'=> $request->SellerId,
        
        'Price'=> $request->Price,
        'BookCondition'=> $request->BookCondition,
        'Language'=> $request->Language,
        'Rating'=> $request->Rating
        ]) ;

        if($result){

            return redirect('/Bbook_list');
             }

             else{
                 return redirect('/Bbook_list');
             }
       }

       public function book_search(){
           $search_text=$_GET['query'];
           $books=Book::where('Name','LIKE','%'.$search_text.'%')->get();
           return view('BestSellingBook.Bbook_list',compact('books'));
       }
}



