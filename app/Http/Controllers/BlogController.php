<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use DB;
class BlogController extends Controller
{
    //
    public function index(){

        $blogs = DB::table('blog')->get();
       return view('Blog.blog_list',compact('blogs'));

    }

    public function blog_create(){
        return view('Blog.add_blog');
    }

    public function store(Request $req){

        $validated = $req->validate([
            'Blog_Name' => 'required',
            'Blog_Desc'=>'required'
           
            
        ]);

       $result= DB::table('blog')->insert(
            ['Blog_Name' => $req->Blog_Name,
              'Blog_Desc'=>$req->Blog_Desc
            
            
            ]
        );
        if($result){
            return redirect('/blog_list');
        }
         
          //return dd($req);
        
    }

    public function edit_blog(Blog $blog, $Id){

        $blogs = DB::table('blog')->where('Blog_Id', $Id)->get();
        return view('Blog.edit_blog')->with('updateblog',$blogs);

    }

    public function update_blog(Request $request, Blog $blog, $Id){

        $result = DB::table('blog')
        ->where('Blog_Id', $Id)
        ->update([
            'Blog_Name'=>$request->Blog_Name,
            'Blog_Desc'=>$request->Blog_Desc
        ]) ;
    
    
         if($result){
    
        return redirect('/blog_list');
         }

    }
}
