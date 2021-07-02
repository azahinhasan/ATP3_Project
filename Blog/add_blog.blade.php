<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Catagory</title>
</head>
<body style="background-color: seagreen">
    
  
    
 <form method="POST">
@csrf
<table>

   
    <tr>
        <td>Blog Name:</td>
        <td ><input type="text" name="Blog_Name" value=""></td>
    </tr> 

    <tr>
        <td>Blog Description:</td>
        <td ><input type="text" name="Blog_Desc" value=""></td>
    </tr> 
      <tr>
        <td ><input type="submit" value="Submit"></td>
      
      </tr>


</table>



 </form>
  
       
    
    
</body>
</html>