<?php
include ("Connection.php");
if(isset($_SESSION["Email_Address"]))
{
     $user_query = "select * from register where Email_Address = '".$_SESSION["Email_Address"]."'";

     $rr = mysqli_query($conn,$user_query);
     
     $user_data = mysqli_fetch_assoc($rr);
     
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>Payment page</title>
        <link rel="stylesheet" href="style3.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <form action="" method="post">
    <h1>Payment Gateway</h1>
    <label for="Pemail">Email ID</label><br>
    <input class="box1" type="email" name="Email_ID" id="email" placeholder="abc@gmail.com" value="<?php echo $user_data["Email_Address"];?>" required>

    <br>

    <label for="Card Holder Name">Card Holder Name</label><br>
    <input class="box1" type="text" name="Name" id="name" placeholder="Name" required><br>
    
    <label for="Amount">Amount</label><br>
    <input class="box1" type="number" name="Amount" id="number" placeholder="Enter Amount" required><br>
    <label for="Date of Purchase">Date</label><br>
    <input class="box1" type="date" name="Date" id="date" placeholder="dd/mm/yyyy" required><br>
    <label for="cardnum">Card Number</label><br>
    <input class="box1" type="number" name="Card_Number" id="number" placeholder="1234 1234 1234 1234" required><br>
    <div class="div1">
      <label for="cardex">Card expiry month</label><br>
      <input class="box2" type="month" name="Card_Expiry_Month" id="month" placeholder="mm" required><br>
    </div>
    <div class="div1">
      <label for="cardye">Card expiry year</label><br>
      <input class="box2" type="year" name="Card_Expiry_Year" id="year" placeholder="yy" required><br>
    </div>
    <div class="div1">
      <label for="cardCVC">Card CVC</label><br>
      <input class="box2" type="cvc" name="Card_CVC" id="cvc" placeholder="cvc" required><br>
    </div>
    <button class="btn" name="Pay" type="submit" value="Pay" >Pay Now</button>
    <a href="landingpage.html"><button type="button" class="btn" >Cancel</button></a>
    <?php

     
if(isset($_POST['Pay'])){

     $q = "insert into payment (`Email_ID`, `Card_Holder_Name`, `Amount`, `Date`, `Card_Number`, `Card_Expiry_Month`, `Card_Expiry_Year`, `Card_CVC`) values('$_POST[Email_ID]','$_POST[Name]', '$_POST[Amount]', '$_POST[Date]', '".md5($_POST['Card_Number'])."', '".md5($_POST['Card_Expiry_Month'])."', '".md5($_POST['Card_Expiry_Year'])."', '".md5($_POST['Card_CVC'])."')";
     $query_run = mysqli_query($conn,$q);
     
$uname=$_POST['Email_ID'];

$sql="select * from payment where Email_ID='".$uname."'";

$result=mysqli_query($conn,$sql);

if($result){
     
          $uname=$_POST['Email_ID'];
          
          $sql1="select * from register where Email_Address='".$uname."'AND Role_ID='Customer'limit 1";
          $a1="select * from register where Email_Address='".$uname."'AND Role_ID='Admin'limit 1";
          
          
          $result2=mysqli_query($conn,$sql1);
          $t=mysqli_query($conn,$a1);
          if($result2){
              $_SESSION["Email_Address"] = $uname;
              $_SESSION["Role_ID"] = 'Customer';
               echo "<script>alert('Your Payment has been done successfully..')</script>";
               echo"<script> window.location.href=\"CustomerDash1.php\";</script>";   
          }
          elseif($t){
              $_SESSION["Email_Address"] = $uname;
              $_SESSION["Role_ID"] = "Admin";
              echo"<script> window.location.href=\"AdminDash.php\";</script>";

               echo "<script>alert('Your Payment has been done successfully..')</script>";  
                
          }
      }
    
      
     


elseif($result==0){
     echo "<script>alert('Error.')</script>"; 
     
    

     

}

}


if(isset($_POST['Close'])){
    
     $uname=$_POST['Email_ID'];
     
     $sql4="select * from register where Email_Address='".$uname."'AND Role_ID='Customer'limit 1";
     $a4="select * from register where Email_Address='".$uname."'AND Role_ID='Admin'limit 1";
     
     
     $result1=mysqli_query($conn,$sql4);
     $p=mysqli_query($conn,$a4);
     if($result1){
         $_SESSION["Email_Address"] = $uname;
         $_SESSION["Role_ID"] = 'Customer';
          header("Location:CustomerDash.php");
     }
     elseif($p){
         $_SESSION["Email_Address"] = $uname;
         $_SESSION["Role_ID"] = "Admin";
          header("Location:AdminDash.php");
     }
 }

?>

</body>
</html>



