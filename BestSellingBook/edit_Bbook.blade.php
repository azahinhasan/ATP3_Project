<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Books</title>
</head>
<body style="background-color: thistle">
    
  
    
 <form method="POST">

  @csrf

<table>

   @foreach ($updatebook as $book)
       
   <tr>
    <td>Book Name:</td>
    <td ><input type="text" name="Name" value="{{$book->Name}}"></td>
</tr> 

<tr>
    <td>Catagory Id:</td>
    <td ><input type="text" name="CategoryId" value="{{$book->CategoryId}}"></td>
</tr> 

<tr>
    <td>Writer Id:</td>
    <td ><input type="text" name="WriterId" value="{{$book->WriterId}}"></td>
</tr> 

<tr>
    <td>publisher:</td>
    <td ><input type="text" name="Publisher" value="{{$book->Publisher}}"></td>
</tr> 



<tr>
  <td> Quantity:</td>
  <td ><input type="text" name="Quantity" value="{{$book->Quantity}}"></td>
</tr>

<tr>
<td> Seller Id:</td>
<td ><input type="text" name="SellerId" value="{{$book->SellerId}}"></td>
</tr>

<tr>
<td> price:</td>
<td ><input type="text" name="Price" value="{{$book->Price}}"></td>
</tr>


<tr>
<td> Book Condition:</td>
<td ><input type="text" name="BookCondition" value="{{$book->BookCondition}}"></td>
</tr>


<tr>
<td> Language:</td>
<td ><input type="text" name="Language" value="{{$book->Language}}"></td>
</tr>

<tr>
<td> Rating:</td>
<td ><input type="text" name="Rating" value="{{$book->Rating}}"></td>
</tr>

    
      <tr>
        <td ><input type="submit" value="Upadate"></td>
        
      </tr>
     
      @endforeach
</table>



 </form>

    
   
    
    
    
    
</body>
</html>