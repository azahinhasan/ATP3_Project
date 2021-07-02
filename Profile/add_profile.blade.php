<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Profile</title>
</head>
<body>
    
  
    
 <form method="POST">
@csrf
<table>

    <tr>
        <td>Name:</td>
        <td ><input type="text" name="name" value=" "></td>
    </tr> 

   <tr>
        <td>Email:</td>
        <td ><input type="text" name="email" value=""></td>
    </tr> 

    <tr>
        <td>Password:</td>
        <td ><input type="text" name="password" value=""></td>
    </tr> 

    <tr>
        <td>User Type:</td>
        <td ><input type="text" name="user_type" value=""></td>
    </tr> 

   

    <tr>
      <td> Gender:</td>
      <td ><input type="text" name="gender" value=""></td>
  </tr>

  <tr>
    <td> PhoneNo:</td>
    <td ><input type="text" name="phone_number" value=""></td>
</tr>



      <tr>

        <td ><input type="Submit" value="Create Profile "></td>
               


      </tr>
   

</table>



 </form>

    
  
    
    
    
</body>
</html>