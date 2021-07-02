<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deal List </title>
</head>
<body>
    
  
    
  <a href="/Back">Back</a>

<table border="1">

     
    <td><a href="/Deal/Create">Create Book</a></td> 
  
    <tr>
        <td>Deal ID</td>
        <td>Customer Name</td>
        <td>Customer Address</td>
        <td>Book Name</td>
        <td>Total Book</td>
        <td>Phone No</td>
       <td>Action</td>
      
              
    </tr> 
@foreach ($deals as $deal)
    

 
  <tr>
    <td>{{$deal->Deal_Id}}</td>
    <td>{{$deal->Customer_Name}}</td>
    <td>{{$deal->Customer_Address}}</td>
    <td>{{$deal->Book_Name}}</td>
    <td>{{$deal->Total_Book}}</td>
    <td>{{$deal->Phone_No}}</td>
    
    <td>
        
        <a href="/Deal/delete/{{$deal->Deal_Id}}">Delete</a>
        <a href="/Deal/edit/{{$deal->Deal_Id}}">Edit</a>
        
     
    </td>
    
  
         
     
    

    
</tr> 

 
  
  @endforeach
    
     
</table>




    
   
    
    
    
    
</body>
</html>