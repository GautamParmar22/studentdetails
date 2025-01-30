<Html>  
<head>   
<title>  
Student Registration 
</title>  
</head>  
<body bgcolor="Lightskyblue">  
<br>  
<br>
<h1>Student Regidtration Form</h1>  

<form action="{{url('add-data')}}" method="POST" enctype='multipart/form-data'>
@csrf
<table border=2px solid black> 
 <tr>
     <td><label> Firstname : </label> </td>
     <td><input type="text" name="firstname" size="15" placeholder="Enter firstname" required/> <br> <br> </td>
 </tr> 
          
 <tr>
    <td><label> Lastname : </label></td> 
    <td><input type="text" name="lastname" size="15" placeholder="Enter lastname" required/> <br> <br> </td> 
</tr>
 
<tr>
    <td><label>Email : </label> </td>
    <td><input type="email" id="email" name="email" placeholder="eg abc@gmail.com" required/> <br> <br> <br>  </tr>
</tr>       
 
<tr>
    <td><label>Mobile No : </label></td> 
    <td><input type="text" name="phone" size="10" placeholder="10 Digit mobileno" required/> <br> <br> <br></td>   
</tr>

  <tr>
      <td><input type="file" name="choosefile" value="" required/></td>

  </tr>
 
  <tr>
      <td><label>Gender :</label><br> 
       </td>
      <td><input type="radio" name="gender" value="Male" checked /> Male <br>  
          <input type="radio" name="gender" value="Female"/> Female <br>  
          <input type="radio" name="gender" value="Other"/> Other<br> <br>
         </td>
  </tr> 

  <td><button type="submit" name="uploadfile">Save</button><br><br></td>
   
</table>
</form>  
</body>  
</html>  