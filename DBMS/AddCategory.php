<?php
include ("Connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buying new policy</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="style8.css">
</head>
<body>

<div class="wrapper">
<form action="" method="post">
     <div class="title">
        New Category
     </div>
     <div class="form">
        <div class="input_field">
            <label>Name</label>
            <input type="text" class="input" name="Name">
       </div>
          <div class="input_field">
               <label>Description</label>
               <input type="textarea" class="input" name="Description">
          </div>
         
         <div class="input_field">
              <input type="submit" name="Add" value="Add" class="btn">    
              <a class="btn" href="AdminDash.php"> Cancel </a> 
         </div>
        </div>
        </form> 
         <?php
     
     if(isset($_POST['Add'])){
          $q = "insert into add_category(`Name`,`Description`) values('$_POST[Name]','$_POST[Description]')";
	     $query_run = mysqli_query($conn,$q);

if($query_run)
{
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
