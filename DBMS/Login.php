<?php

include ("Connection.php");


if(isset($_SESSION["Email_Address"]))
{
    if($_SESSION["Role_ID"]=="Customer")
       header("Location: CustomerDash1.php");
       else
         header("Location: AdminDash.php");

}
if(isset($_POST['Login'])){
    
    $uname=$_POST['Email_Address'];
    $password=$_POST['Password'];
    
    $sql="select * from register where Email_Address='".$uname."'AND Password='".md5($password)."' AND Role_ID='Customer'limit 1";
    $a="select * from register where Email_Address='".$uname."'AND Password='".md5($password)."' AND Role_ID='Admin'limit 1";
    
    
    $result=mysqli_query($conn,$sql);
    $e=mysqli_query($conn,$a);
    if(mysqli_num_rows($result)==1){
        $_SESSION["Email_Address"] = $uname;
        $_SESSION["Role_ID"] = 'Customer';
    	header("Location:CustomerDash1.php");
    }
    elseif(mysqli_num_rows($e)==1){
        $_SESSION["Email_Address"] = $uname;
        $_SESSION["Role_ID"] = "Admin";
    	header("Location:AdminDash.php");
    }
    else{
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";     
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>Login Form</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <div class="center">
            <h1>Login</h1>
            <form action="" method="Post">
                <div class="txt_field">
                   <input type="text" name="Email_Address" required>
                   <span></span>
                   <label>Email Address</label>
                </div>
                <div class="txt_field">
                   <input type="password" name="Password" required>
                   <span></span>
                   <label>Password</label>
                </div>
                   <input type="submit" value="Login" name="Login">
                   <div class="register_link">
                    Not a member? <a href="Register.php">Register</a>

                </div>

            </form>
        </div>
    </body>
</html>



