<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>
<body style="background-color: tan">
    
  
    
 <form method="POST" enctype="multipart/form-data">
@csrf
<table>

    <tr>
        <td>Book Name:</td>
        <td ><input type="text" name="Name" value=" "></td>
    </tr> 

   <tr>
        <td>Catagory Id:</td>
        <td ><input type="text" name="CategoryId" value=""></td>
    </tr> 

    <tr>
        <td>Writer Id:</td>
        <td ><input type="text" name="WriterId" value=""></td>
    </tr> 

    <tr>
        <td>publisher:</td>
        <td ><input type="text" name="Publisher" value=""></td>
    </tr> 

   

    <tr>
      <td> Quantity:</td>
      <td ><input type="text" name="Quantity" value=""></td>
  </tr>

  <tr>
    <td> Seller Id:</td>
    <td ><input type="text" name="SellerId" value=""></td>
</tr>

<tr>
  <td> price:</td>
  <td ><input type="text" name="Price" value=""></td>
</tr>
  

<tr>
  <td> Book Condition:</td>
  <td ><input type="text" name="BookCondition" value=""></td>
</tr>
   

<tr>
  <td> Language:</td>
  <td ><input type="text" name="Language" value=""></td>
</tr>

<tr>
  <td> Rating:</td>
  <td ><input type="text" name="Rating" value=""></td>
</tr>

<!--<<tr>
  <td> Image:</td>
  <td ><input type="file" name="BookSampleImage1" value=""></td>
</tr>-->

      <tr>

        <td ><input type="Submit" value="Create Books "></td>
      
         


      </tr>
   

</table>



 </form>

    
   
    
    
    
    
</body>
</html>