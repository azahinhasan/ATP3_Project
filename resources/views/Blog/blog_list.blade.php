<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Book</title>
</head>
<body style="background-color:Green">
    <a href="/Back">Back</a>
    <a href="/Blog/Create">Create Blog</a>
    @foreach ($blogs as $blog)
        
            
      
       <p> {{$blog->Blog_Name}}</p>
       <p> {{$blog->Blog_Desc}}</p>

       <a href="/Blog/edit/{{$blog->Blog_Id}}">Update blog</a>
       
       
       

       
              
       @endforeach 
     


       
       
       
      
    
    
    
</body>
</html>