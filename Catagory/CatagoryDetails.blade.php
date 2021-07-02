<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catagory Details</title>
</head>
<body>
    
  
    
 

<table border="1">

 
       
  
    <tr>
        <td>ID</td>
        <td>Name</td>
       
      
    </tr> 
      
    @foreach ($catagory as $detail)
        
    
     
     <tr>
         <td>CategoryId</td>
        <td>{{$detail['CategoryId']}}</td>

     </tr>  
     
     <tr>

         <td>Category Details</td>
         <td>{{$detail['CategoryName']}}</td>
        
     </tr>       

         
      

      @endforeach
    

</table>




    
   
    
    
    
    
</body>
</html>