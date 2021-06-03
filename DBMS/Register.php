<?php
include("Connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<div class="wrapper">
     <div class="title">Registration Form</div>
     <form action="" method="post">
     <div class="form">
          <div class="input_field">
               <label>First Name</label>
               <input type="text" name="First_Name" class="input" placeholder="Enter First Name" required>
          </div>
          <div class="input_field">
               <label>Last Name</label>
               <input type="text" name="Last_Name" class="input" placeholder="Enter Last Name" required>
          </div>
          <div class="input_field">
               <label>Password</label>
               <input type="password" name="Password" class="input" placeholder="********" required>
          </div>
          <div class="input_field">
               <label>Confirm Password</label>
               <input type="password" name="Confirm_Password" class="input" placeholder="********" required>
          </div>
          <div class="input_field">
               <label>Gender</label>
               <div class="custom_select">
                    <select name="Gender" required> 
                          <option value="">Select</option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                          <option value="other">Other</option>
                    </select>
                </div>
         </div>
         <div class="input_field">
              <label>Email Address</label>
              <input type="text" class="input" name="Email_Address" placeholder="abc@gmail.com" required>
         </div>
         <div class="input_field">
              <label>Phone Number</label>
              <input type="number" class="input" name="Phone_Number" placeholder="Enter Phone Number" required>
         </div>
         <div class="input_field">
              <label>Address</label>
              <textarea class="textarea" name="Address" placeholder="Enter Address" required></textarea>
         </div>
         <div class="input_field">
              <label>Postal Code</label>
              <input type="text" class="input" name="Postal_Code" placeholder="6-digit code" required>
         </div>
         <div class="input_field_terms" >
              <label class="check">
                 <input type="checkbox" required>
                 <span class="checkmark"></span>
              </label>
              <label>Agreed to terms and conditions</label>
         </div>
         <div class="input_field">
              <input type="submit" name="Register" value="Register" class="btn"> 
              <a href="landingpage.html"><button type="button" class="btn1" >Cancel</button></a>

              
         </div>
     </form>
     <?php

     
     if(isset($_POST['Register'])){
         
     $uname=$_POST['Email_Address'];
     
     $sql="select * from register where Email_Address='".$uname."'";

     $result=mysqli_query($conn,$sql);

     if(mysqli_num_rows($result)>0){
          echo "<script>alert('This Email Address is already registered.')</script>";   
          echo"<script> window.location.href=\"Login.php\";</script>";
         
         
               
           }

     else{
          if($_POST['Password'] == $_POST['Confirm_Password'] && strlen($_POST['Password']) >= 8){

     
               $q = "insert into register (`First_Name`, `Last_Name`, `Password`, `Gender`, `Email_Address`, `Phone_Number`, `Address`, `Postal_Code`) values('$_POST[First_Name]','$_POST[Last_Name]', '".md5($_POST['Password'])."', '$_POST[Gender]', '$_POST[Email_Address]', '$_POST[Phone_Number]', '$_POST[Address]', '$_POST[Postal_Code]')";
               $query_run = mysqli_query($conn,$q);
               }
          echo "<script>alert('You are registered.')</script>"; 
          echo"<script> window.location.href=\"Login.php\";</script>";

          }
     }
     
     
     if(isset($_POST['Cancel'])){   
          header("Location: landingpage.html");
}
     ?>

         
</div>
<script src="jquery-3.6.0.js"></script>
<script src="bootstrap.css"></script>
</body>
</html>
