
<?php
include ("Connection.php");
$opt=1302;
$opt++;
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
          New policy
     </div>
     <div class="form">
          <form action="" method="post">
        <div class="input_field">
            <label>Policy Id</label>
            <input type="text" class="input" name="Policy_Id"  value="<?php
            echo $opt;?>">
       </div>
          <div class="input_field">
               <label>Policy Type</label>
               <div class="custom_select">
                    <select name="Policy_Type" required>
                          <option value="">Select</option>
                          <option value="Third party Insurance">Third party Insurance</option>
                          <option value="standard Insurance">standard Insurance</option>
                          <option value="Comprehensive Insurance">Comprehensive Insurance</option>
                    </select>
                </div>
          </div>
          <div class="input_field">
               <label>Cost</label>
               <input type="text" class="input" name="Cost" required>
          </div>
          <div class="input_field">
            <label>Duration</label>
            <div class="custom_select">
                 <select name="Duration" required>
                       <option value="">Select</option>
                       <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="5">5</option>
                       <option value="10">10</option>

                 </select>
             </div>
       </div>
          <div class="input_field">
               <label>Description</label>
               <input type="textarea" class="input" name="Description" required>
         </div>
         
        
         <div class="input_field">
              <input type="submit" value="Add" class="btn" name="Add" required>    
              <a class="btn" href="AdminDash.php"> Cancel </a> 
         </div>
</form>
</div>
      <?php    
     if(isset($_POST['Add'])){
          $opt++;
          $q = "insert into new_policy(`Cost`,`Description`,`Duration`,`Policy_Id`,`Policy_type`) values('$_POST[Cost]','$_POST[Description]','$_POST[Duration]','$_POST[Policy_Id]','$_POST[Policy_Type]')";
	     $query_run = mysqli_query($conn,$q);

if($query_run)
{
     $opt++;
	echo "<script>alert('New policy add')</script>";
}
else
{
	echo "<script>alert('not added')</script>";
}
     }
     ?>

         
</div>

</body>
</html>