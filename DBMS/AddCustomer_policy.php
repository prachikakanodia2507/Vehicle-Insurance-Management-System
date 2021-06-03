<?php

include ("Connection.php");

if(isset($_SESSION["Email_Address"]))
{
     $user_query = "select * from register";
     $user1_query = "select * from add_category";

     $rr1= mysqli_query($conn,$user1_query);
     $rr = mysqli_query($conn,$user_query);
     $user_data = mysqli_fetch_assoc($rr);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buying new policy</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="style5.css">
</head>
<body>

<div class="wrapper">

     <div class="title">
          Buy policy
     </div>
     <div class="form">
     <form action="" method="post">
     
     
          <div class="input_field">
               <label>Policy Type</label>
               <div class="custom_select">
               <select name="Policy_Type"><option value="">Select</option>
                    <?php
                    while( $cat_data = mysqli_fetch_assoc($rr1)){
                          
                         echo "<option value=".$cat_data['Name'].">".$cat_data['Name']."</option>";
                          
                    }
                    ?>
                    </select>
                </div>
          </div>
          <div class="input_field">
               <label>Email Address</label>
               <input type="text" class="input" name="Email_Address" required>
          </div>
          <div class="input_field">
               <label>Customer Name</label>
               <input type="text" class="input" value="<?php echo $user_data["First_Name"]." ".$user_data["Last_Name"];?>" name="Customer_Name" required>
          </div>
          <div class="input_field">
               <label>Vehicle Number</label>
               <input type="text" class="input" name="Vehilcle_Number" required>
          </div>
          
          <div class="input_field">
               <label>Registration Date</label>
               <input type="date" class="input" name="Registration_Date" required>
         </div>
         <div class="input_field">
              <label>Total Amount</label>
              <input type="text" class="input" name="Total_Amount" required>
              </div>
        <div class="input_field">
                <label>Start Date</label>
                <input type="date" class="input" name="Start_Date" required>
          </div>
         <div class="input_field">
               <label>End Date</label>
               <input type="date" class="input" name="End_Date" required>
         </div>
        
         <div class="input_field">
        

              <input type="submit" class="btn"  name="Payment" >    
              <a class="btn" href="AdminDash.php"> Cancel </a>
              
                       </div>
      </form> 
     </div> 

<?php
     
     if(isset($_POST['Payment'])){
          $q = "insert into buy_policy (`Policy_Type`, `Customer_Name`,`Email_Address`, `Vehilcle_Number`,`Registration_Date`, `Total_Amount`, `Start_Date`, `End_Date`) values('$_POST[Policy_Type]','$_POST[Customer_Name]','$_POST[Email_Address]','$_POST[Vehilcle_Number]','$_POST[Registration_Date]','$_POST[Total_Amount]','$_POST[Start_Date]','$_POST[End_Date]')";
          $query_run = mysqli_query($conn,$q);


if($query_run)
{
     header("location: Payment.php");
     	echo "<script>alert('Added')</script>";
}
else
{
	echo "<script>alert('not Updated')</script>";
}
     }
     ?> 
</div>

</body>
</html>

<?php
}

?>