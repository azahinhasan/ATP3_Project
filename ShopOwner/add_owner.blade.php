<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Owner</title>
</head>
<body>
    
  <a href="/Back">Back</a>
    
 <form method="POST">
@csrf
<table>

    <tr>
        <td>Shop Name:</td>
        <td ><input type="text" name="Shop_Name" value=" "></td>
    </tr> 

   <tr>
        <td>Shopper Name:</td>
        <td ><input type="text" name="Shopper_Name" value=""></td>
    </tr> 

    <tr>
        <td>Shop Address:</td>
        <td ><input type="text" name="Shop_Address" value=""></td>
    </tr> 

    <tr>
        <td>Verfied Status:</td>
        <td ><input type="text" name="Verified_Status" value=""></td>
    </tr>
    
    <tr>
        <td>Shop Licence:</td>
        <td ><input type="text" name="Shop_Licence" value=""></td>
    </tr>
    

   

    <tr>
      <td> Phone No:</td>
      <td ><input type="text" name="Phone_No" value=""></td>
  </tr>

  <tr>
    <td> User ID:</td>
    <td ><input type="text" name="User_Id" value=""></td>

   
  </tr>

        <td ><input type="Submit" value="Create Owner "></td>
      
       
      </tr>
   
</table>

 </form>

         
    
        
</body>
</html>