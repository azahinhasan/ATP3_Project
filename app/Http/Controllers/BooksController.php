<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use DB;

class BooksController extends Controller
{
    //
    public function index(){
        $books = DB::table('books')->get();
        return view('Book.book_list',compact('books'));
    }

    public function addbook(){
        return view('Book.add_book');
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
        
            'BookSampleImage1'=>'required'

           
            
        ]);

       if ($req->hasFile('BookSampleImage1')) {
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
        }



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
        'Rating'=> $req->Rating,
        
        'BookSampleImage1'=>$fileName
         


        ]
         
         
        
      );
       
      
     
      if($result){
         return redirect('/book_list');

      }
      else
      {
         //return dd($req);
      }
        //return redirect('/book_list');
      //  return dd($req);
      }

      public function show(Book $book, $Id)
    {
        //$product = DB::table('products')->where('product_id', $id)->first();
        $book = Book::find($Id);
        //return dd();
        return view('Book.book_details')->with('book', $book);
    }

         
      public function book_destroy(Book $book, $Id){
       
        $result = DB::table('books')->where('Id', '=', $Id)->delete();
        if ($result) {
            return redirect('/book_list');
        } else {
            return " Failed to delete";
        }

      }


       public function book_edit(Book $book, $Id){
         
        $books = DB::table('books')->where('ID', $Id)->get();
        return view('Book.edit_book')->with('updatebook',$books);
        
       }

       public function book_update(Request $request, Book $book, $Id){

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

            return redirect('/book_list');
             }

             else{
                 return redirect('/book_list');
             }
       }

       public function book_search(){
           $search_text=$_GET['query'];
           $books=Book::where('Name','LIKE','%'.$search_text.'%')->get();
           return view('Book.book_list',compact('books'));
       }


       public function getAllBooksForHome()
       {
           $booksOfHome = DB::table('books')->get();
           return view('Book_Mid_Project.index')->with('booksOfHome', $booksOfHome);
       }
   
       public function getBooksByCatagory($category)
       {
       }
   
       public function BookById($id)
       {
           $book = DB::table('books')->where('id', $id)->first();
           //return dd($book);
           return view('Book_Mid_Project.single_product')->with('book', $book);
       }
   


}
