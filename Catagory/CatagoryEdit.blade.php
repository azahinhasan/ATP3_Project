<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catagory</title>
</head>
<body>
    
  
    
 <form method="POST">

  @csrf

<table>

   @foreach ($catagory as $catagories)
       
 
    <tr>
        <td>Name:</td>
        <td ><input type="text" name="CategoryName" value="{{$catagories->CategoryName}}"></td>
    </tr> 
      <tr>
        <td ><input type="submit" value="Upadate"></td>
       
      </tr>
     
      @endforeach
</table>



 </form>

    
   
    
    
    
    
</body>
</html>