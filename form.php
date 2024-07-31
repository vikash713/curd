<?php include "connection.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php CURD operation</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="container">
  <form action="#" method="post">
    <div class ="title">Registeration form</div>
    <div class="form">
      <div class="input_feild">
      <label> First name</label>
      <input type="text" class="input" name="fname" id="fname" >
    </div>
    <div class="input_feild">
      <label> Last Name</label>
      <input type="text" class="input" name="lname">
    </div>
    <div class="input_feild">
      <label> password</label>
      <input type="password" class="input" name="password">
    </div>
    <div class="input_feild">
      <label> confirm password</label>
      <input type="password" class="input" name="conpassword" >
    </div>
  
    <div class="input_feild">
      <label>Gender</label>
      <select class="selectbox" name="gender">
        <option>Select</option>
        <option>Male</option>
        <option>Female</option>
      </select>
    </div>
    
    <div class="input_feild">
      <label>Email Address</label>
      <input type="email" class="input" name="email">
    </div>
    <div class="input_feild">
      <label for="Phone Number">Phone Number</label>
      <input type="text" class="input" name="phone">
    </div>
    <div class="input_feild">
      <label for="address">Address</label>
      <textarea class="textarea" name="address"></textarea>
    </div>
    <div class="input_feild terms">
      <label class="check">
      <input type="checkbox"name="">
      <span class="checkmark"></span>
      </label>
      <p>Agree to terms and condition</p>
    </div>
    <div class="input_feild">
      <input type="submit" value="Register" class="btn" name="Register">
</form>
</div>

</body>
</html>
<?php
    if(isset($_POST['Register']))
    {
      $fname      =$_POST['fname'];
      $lname      =$_POST['lname'];
      $password   =$_POST['password'];
      $conpassword=$_POST['conpassword'];
      $gender     =$_POST['gender'];
      $email      =$_POST['email'];
      $phone      =$_POST['phone'];
      $address    =$_POST['address'];

      if ($fname != "" && $lname != "" && $password != "" && $conpassword != "" && $gender != "" && $email != "" && $phone != "" && $address != "") 
      {
       
    
      
       
          $query="INSERT INTO form (fname,lname,password,cpassword,gender,email,phone,address) VALUES('$fname','$lname','$password','$conpassword','$gender','$email','$phone','$address')";
          $data=mysqli_query($conn,$query);
          if($data)
           {
               echo "inserted ";
           }
            else
          {
            echo "failed";
          }
      }
       else{
        echo "please insert the details";
       }
      
      
        
      


    }
?>