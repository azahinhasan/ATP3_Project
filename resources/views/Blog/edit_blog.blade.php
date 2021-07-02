<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog</title>
</head>
<body style="background-color: slateblue">
    
  
    
 <form method="POST">

  @csrf

<table>

   @foreach ($updateblog as $blog)
       
 
    <tr>
        <td>Blog Name:</td>
        <td ><input type="text" name="Blog_Name" value="{{$blog->Blog_Name}}"></td>
    </tr> 

    <tr>
        <td>Blog Description:</td>
        <td ><input type="text" name="Blog_Desc" value="{{$blog->Blog_Desc}}"></td>
    </tr> 
      <tr>
        <td ><input type="submit" value="Upadate"></td>
       
      </tr>
     
      @endforeach
</table>



 </form>

    
   
    
    
    
    
</body>
</html>