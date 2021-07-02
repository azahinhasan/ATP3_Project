<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
   
  
    <a href="/Back">Back</a>

<table border="1">

 
    <td><a href="/Profile/Create">Create Profile</a></td> 
  
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
        <td>User type</td>
        <td>Gender</td>
        <td>Phone Number</td>
        
        <td>Action</td>
      
              
    </tr> 

  @foreach ($users as $user)
  <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->password}}</td>
    <td>{{$user->user_type}}</td>
    <td>{{$user->gender}}</td>
    <td>{{$user->phone_number}}</td>
  
    <td>
        <a href="/Profile/details/{{$user->id}}">Details</a>
        <a href="/Profile/delete/{{$user->id}}">Delete</a>
        <a href="/Profile/edit/{{$user->id}}">Edit</a>
        
     


    </td>
    
            
   
     
    

    
</tr> 

 
  
  @endforeach
    
     
</table>

 
   
    
    
    
    
</body>
</html>