<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta charset="UTF-8">
  <title>REPORT</title>
  <link href="style15.css" rel="stylesheet">
</head>

<body>
<div class="head">
    <h1> Details</h1>

</div>
<div class="container">
   <div class="row">
   <div class="col-md-8 col-md-offset-2" style="margin-left: 5%;">
   <div class="row">
 
   <?php
   $conn = new mysqli('localhost', 'root', '', 'insurance_management_system');
 
     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM buy_policy WHERE Customer_Name LIKE '%$searchKey%'";
     }else
     $sql = "SELECT * FROM buy_policy";
     $result = $conn->query($sql);
   ?>

   <form action="" method="GET"> 
     <div class="col-md-6">
        <input type="text" name="search" class='form-control' placeholder="Search By Name" value=<?php echo @$_GET['search']; ?> > 
     </div>
     <div class="col-md-6 text-left">
      <button class="btn">Search</button>
     </div>
   </form>

   <br> 
   <br>
</div>
<center>
<table style="width:100%;"  class="table table-bordered" >
  <?php 
  echo "<tr> <th>Policy Type</th><th>Policy_Id</th> <th>Customer Name</th><th>Email_Address</th> <th>Vehicle Number</th><th>Total Amount</th><th>Start Date</th><th>End Date</th></tr>";
  ?>

  <?php while( $row = $result->fetch_object() ): ?>
  <tr>
     <td><?php echo $row->Policy_Type?></td>
     <td><?php echo $row->Policy_ID?></td>
     <td><?php echo $row->Customer_Name?></td>
     <td><?php echo $row->Email_Address?></td>
     <td><?php echo $row->Vehilcle_Number ?></td>
     <td><?php echo $row->Total_Amount?></td>
     <td><?php echo $row->Start_Date?></td>
     <td><?php echo $row->End_Date?></td>
  </tr>
  <?php endwhile; ?>
</table>
</center>
</div>
</div>
</div>
</body>
</html>