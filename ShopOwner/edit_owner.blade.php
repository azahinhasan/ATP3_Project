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

   @foreach ($updateowner as $owner)
       
   
   <tr>
    <td>Shop Name:</td>
    <td ><input type="text" name="Shop_Name" value="{{$owner->Shop_Name}} "></td>
</tr> 

<tr>
    <td>Shopper Name:</td>
    <td ><input type="text" name="Shopper_Name" value="{{$owner->Shopper_Name}}"></td>
</tr> 

<tr>
    <td>Shop Address:</td>
    <td ><input type="text" name="Shop_Address" value="{{$owner->Shop_Address}}"></td>
</tr> 

<tr>
    <td>Verfied Status:</td>
    <td ><input type="text" name="Verified_Status" value="{{$owner->Verified_Status}}"></td>
</tr>

<tr>
    <td>Shop Licence:</td>
    <td ><input type="text" name="Shop_Licence" value="{{$owner->Shop_Licence}}"></td>
</tr>




<tr>
  <td> Phone No:</td>
  <td ><input type="text" name="Phone_No" value="{{$owner->Phone_No}}"></td>
</tr>

<tr>
<td> User ID:</td>
<td ><input type="text" name="User_Id" value="{{$owner->User_Id}}"></td>


</tr>

    <td ><input type="Submit" value="Update Owner "></td>
    
   
  </tr>
    
     
     
      @endforeach
</table>



 </form>

    
   
    
    
    
    
</body>
</html>