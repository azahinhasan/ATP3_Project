<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Deal</title>
</head>
<body>
    
  
    
 <form method="POST">
@csrf

<table>
    @foreach ($updatedeal as $deal)
    <tr>
        <td>Customer Name:</td>
        <td ><input type="text" name="Customer_Name" value="{{$deal->Customer_Name}}"></td>
    </tr> 

   <tr>
        <td>Customer Address:</td>
        <td ><input type="text" name="Customer_Address" value="{{$deal->Customer_Address}}"></td>
    </tr> 

    <tr>
        <td>Book Name:</td>
        <td ><input type="text" name="Book_Name" value="{{$deal->Book_Name}}"></td>
    </tr> 

    <tr>
        <td>Total Book:</td>
        <td ><input type="text" name="Total_Book" value="{{$deal->Total_Book}}"></td>
    </tr> 

   

    <tr>
      <td>Phone No:</td>
      <td ><input type="text" name="Phone_No" value="{{$deal->Phone_No}}"></td>
  </tr>
    
 
      <tr>

        <td ><input type="Submit" value="Create Deal "></td>
        
         
      </tr>
   @endforeach

</table>



 </form>

    
      
    
    
</body>
</html>