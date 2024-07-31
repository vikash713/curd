<html>
  <head>
    <title>DISPLAY</title>
    <style>
      body
      {
        background-color:53b6e1
      }
      table
      {
        background-color:aliceblue
      }
    </style>
  </head>
<?php
  include("connection.php");
  error_reporting(0);
  $query="SELECT * FROM form";
  $data= mysqli_query($conn, $query);

  $total = mysqli_num_rows($data);
   //$result=mysqli_fetch_assoc($data);- it was showing error bcz 1st row was not printing

   //echo $result[];
   //echo $total;
   $firstName = $_POST['fname'];

  if($total !=0)
  {
    ?>
    <h2 align="center"><mark>DISPLAYING ALL RECORD</mark></h2>
     <center><table border="3" cellspacing="7" width="90%">
        <tr>
        <th width="5%">Id</th>
         <th width="10%">First Name</th>
         <th width="10%">Last Name</th>
         <th width="10%">Password</th>
         <th width="10%">Gender</th>
         <th width="10%">Email Id</th>
         <th width="10%">Phone Number</th>
         <th width="10%">Address</th>
         <th width="15%">Operations</th>
         </tr>

    
    <?php
    while($result=mysqli_fetch_assoc($data))
    {
      
      echo "<tr>
              <td>".$result['Id']."</td>
              <td>".$result['fname']."</td>
              <td>".$result['lname']."</td>
              <td>".$result['password']."</td>
              <td>".$result['gender']."</td>
              <td>".$result['email']."</td>
              <td>".$result['phone']."</td>
              <td>".$result['address']."</td>     
<td>
<a href='update_design.php?result=".json_encode($result)."'>
update
</a>
</td>






          
            
  </tr>";
    }
  }
  else
  {
    "no record found";
  }
?>
</table>
</center>

