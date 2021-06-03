<?php
include("connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style16.css" rel="stylesheet">
    <title>Report</title>
</head>
<body>
    <Center>
        <div class="head">
    <h1>Policy Details</h1>

</div>
<br>
    <table class="table" border=1>
    <?php
    
    $query = "select * from new_policy ";
    echo "<tr> <th>Policy_Id</th> <th>Policy Type</th><th>Description</th><th>Duration</th><th>Cost</th></tr>";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        echo "<tr>";
            echo "<td>".$row["Policy_Id"]."</td> <td>".$row["Policy_type"]."</td> <td>".$row["Description"]."</td> <td>".$row["Duration"]."</td> <td>".$row["Cost"]."</td>" ;
        echo "</tr>";

    }
    ?>
    </table>
</center>
</body>
</html>
<?php

?>