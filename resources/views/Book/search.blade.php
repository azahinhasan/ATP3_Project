<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Book</title>
</head>
<body style="background-color: red">
    
  
    <form type="get" action="{{url('/Search')}}">
    <input name="query" type="search">
    <button type="submit" >Search</button>



    </form>
 

<table border="1">

 
    <td><a href="/Book/Create">Create Book</a></td> 
  
    <tr>
        <td>ID</td>
        <td>BookName</td>
        <td>CatagoryId</td>
        <td>WriterId</td>
        <td>Publisher</td>
        <td>Quantity</td>
        <td>SellerId</td>
        <td>Price</td>
        <td>BookCondition</td>
        <td>Language</td>
        <td>Rating</td>
        <td>Action</td>
      
              
    </tr> 

  @foreach ($books as $book)
  <tr>
    <td>{{$book->Id}}</td>
    <td>{{$book->Name}}</td>
    <td>{{$book->CategoryId}}</td>
    <td>{{$book->WriterId}}</td>
    <td>{{$book->Publisher}}</td>
    <td>{{$book->Quantity}}</td>
    <td>{{$book->SellerId}}</td>
    <td>{{$book->Price}}</td>
    <td>{{$book->BookCondition}}</td>
    <td>{{$book->Language}}</td>
    <td>{{$book->Rating}}</td>
    <td>
        <a href="/Book/detail/{{$book->Id}}">Detail</a>
        <a href="/Book/delete/{{$book->Id}}">Delete</a>
        <a href="/Book/edit/{{$book->Id}}">Edit</a>
        
     


    </td>
    
            
    
       
     
    

    
</tr> 

  <img src="asset('upload/$file->getClientOrginalName()')"alt="">
  
  @endforeach
    
     
</table>




    
   
    
    
    
    
</body>
</html>