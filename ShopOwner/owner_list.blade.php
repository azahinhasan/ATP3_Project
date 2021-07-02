<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Book</title>
</head>
<body>
    
    <a href="/Back">Back</a>
 

<table border="1">

 
    <td><a href="/ShopOwner/Create">Add Owner</a></td> 
  
    <tr>
        <td>ShopID</td>
        <td>ShopName</td>
        <td>ShopperName</td>
        <td>ShopAddress</td>
        <td>VerifiedStatus</td>
        <td>ShopLicence</td>
        <td>PhoneNo</td>
        <td>UserID</td>
        <td>Action</td>
                    
    </tr> 

    
@foreach ($shop as $owner)
    

  
  <tr>
    <td>{{$owner->Shop_Id}}</td>
    <td>{{$owner->Shop_Name}}</td>
    <td>{{$owner->Shopper_Name}}</td>
    <td>{{$owner->Shop_Address}}</td>
    <td>{{$owner->Verified_Status}}</td>
    <td>{{$owner->Shop_Licence}}</td>
    <td>{{$owner->Phone_No}}</td>
    <td>{{$owner->User_Id}}</td>
        
    <td>
       
        <a href="/ShopOwner/delete/{{$owner->Shop_Id}}">Delete</a>
        <a href="/ShopOwner/edit/{{$owner->Shop_Id}}">Edit</a>
            
    </td>
    
    @endforeach      
           
        

    
</tr> 
  
   
     
</table>

         
    
    
</body>
</html>