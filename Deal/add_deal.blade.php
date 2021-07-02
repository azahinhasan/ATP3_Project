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

    <tr>
        <td>Customer Name:</td>
        <td ><input type="text" name="Customer_Name" value=" "></td>
    </tr> 

   <tr>
        <td>Customer Address:</td>
        <td ><input type="text" name="Customer_Address" value=""></td>
    </tr> 

    <tr>
        <td>Book Name:</td>
        <td ><input type="text" name="Book_Name" value=""></td>
    </tr> 

    <tr>
        <td>Total Book:</td>
        <td ><input type="text" name="Total_Book" value=""></td>
    </tr> 

   

    <tr>
      <td>Phone No:</td>
      <td ><input type="text" name="Phone_No" value=""></td>
  </tr>

 
      <tr>

        <td ><input type="Submit" value="Create Deal "></td>
        
         
      </tr>
   

</table>



 </form>

    
   
    
    
    
    
</body>
</html>