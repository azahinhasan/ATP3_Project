<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catagory</title>
</head>
<body style="background-color:pink
">
    
  
    <a href="/Back">Back</a>
      

<table border="1">
   
 
    <td><a href="/Catagory/Create">Create Catagory</a></td> 
    
  
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Action</td>
        
    </tr> 
      
     @foreach ($allcatagory as $catagory)

     
     <tr>
        
         <td>{{$catagory->CategoryId}}</td>
         <td>{{$catagory->CategoryName}}</td>
         <td>
        
         <a href="/Catagory/delete/{{$catagory->CategoryId}}">Delete</a>
         <a href="/Catagory/edit/{{$catagory->CategoryId}}">Edit</a>
         
         </td>
          
         
      </tr>
      
     @endforeach

</table>




    
   
    
    
    
    
</body>
</html>