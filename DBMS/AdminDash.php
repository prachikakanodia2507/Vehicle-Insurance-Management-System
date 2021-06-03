<!DOCTYPE html>
<html>
<head>
 <title>Administration</title>
</head>

<style type="text/css">


*{
 margin:0px;

 padding: 0px;

}
body{
 font-family: arial;
 
}


.card1{
     width: 20%;
     display: inline-block;
     margin-left:340px;
     margin-top: 20px;
     box-shadow: 2px 2px 20px black;
     border-radius: 15px; 
    
    }
    .card4{
     width: 20%;
     display: inline-block;
     margin-left:450px;
     box-shadow: 2px 2px 20px black;
     border-radius: 15px; 
     margin-top: 20px;
    }
     .card5{
     width: 20%;
     margin-top: 20px;
     display: inline-block;
     margin-left:15px;
     
     box-shadow: 2px 2px 20px black;
     border-radius: 15px; 
    
    }
    .card2{
     width: 20%;
     margin-top: 20px;
     display: inline-block;
     margin-left:15px;
     box-shadow: 2px 2px 20px black;
     border-radius: 15px; 
    
    }
    .card3{
     width: 20%;

     margin-top: 20px;
     display: inline-block;
     margin-left:20px;
     box-shadow: 2px 2px 20px black;
     border-radius: 15px; 
    
    }

.image img{
  width: 90%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  height:230px;
 
 }

.title{
 
  text-align: center;
  padding: 10px;
  
 }

h1{
  font-size: 20px;
 }
.main{
    margin-top:40px;
}
.des{
  padding: 3px;
  text-align: center;
 
  padding-top: 10px;
border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}

.nav {
  background-color: #000428;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.nav a{
 
  display:inline-block;
  color: #f2f2f2;
  text-align: center;
  margin-left: 450px;
  padding: 25px ;
  text-decoration: none;
  font-size: 20px;
}
.nav h1{
    display:inline-block;
    font-size: 35px;
    color:white;
    margin-left: 650px;
}


</style>
<body>
    <div class="nav">
       <h1 >Admin Dashboard</h1>
        <a class="b" href="Signout.php">Logout</a>
      </div>
<div class="main">
<div class="card1">

    <div class="image">
        <a href="Newpolicy.php">
            <img src="add_policy.png">
         </a>
       
    </div>
<div class="title">
 <h1>
Add New Policy</h1>
</div>
</div>
<!--cards -->


<div class="card2">

    <div class="image">
        <a href="AddCustomer.php">
            <img src="add_user.png">
         </a>
       
    </div>
    <div class="title">
     <h1>
        Add Customer</h1>
    </div>
    </div>
    <div class="card3">

        <div class="image">
            <a href="AddCategory.php">
                <img src="add_category.png">
             </a>
           
        </div>
        <div class="title">
         <h1>
        Add Category</h1>
        </div>
        </div>
    <div class="card4">

        <div class="image">
            <a href="AddCustomer_policy.php">
                <img src="buy_policy.png">
             </a>
           
        </div>
        <div class="title">
         <h1>
        Buy Policy</h1>
        </div>
        </div>
        
            <div class="card5">

                <div class="image">
                    <a href="Report.php">
                        <img src="Report.png">
                     </a>
                   
                </div>
                <div class="title">
                 <h1>
                Logs</h1>
                </div>
                </div>
                
</div>
</body>
</html>
