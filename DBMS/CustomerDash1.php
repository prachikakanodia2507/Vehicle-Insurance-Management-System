<!DOCTYPE html>
<html>
<head>
 <title>Customer Dashboard</title>
</head>

<style type="text/css">



*{
 margin:0px;

 padding: 0px;

}
body{
 font-family: arial;
 min-height: 100%;
 background-color:#F5F5F5;
    background-attachment: fixed;
    background-size: cover;
}



 img{
  width: 80%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  height:270px;
  
 
 }

.title{
 
  text-align: center;
  padding: 10px;
  
 }
 .card1{
     width: 25%;
     display: inline-block;
     margin-top: 120px;
     margin-left: 200px;
     margin-right: 50px;
     box-shadow: 2px 2px 20px black;
     border-radius: 15px; 
     background-color:white;
    
    }
    .card2{
     width: 25%;
     display: inline-block;
     margin-top: 20px;
     margin-right: 50px;
     box-shadow: 2px 2px 20px black;
     border-radius: 15px; 
     background-color:white;
    }
    .card3{
     width: 25%;
     display: inline-block;
     margin-top: 20px;
     box-shadow: 2px 2px 20px black;
     border-radius: 15px; 
     background-color:white;
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
    margin-left: 750px;
}


</style>
<body>
    <div class="nav">
       <h1 >Dashboard</h1>
        <a class="b" href="Signout.php">Logout</a>
      </div>
<div class="main">
 
          

<div class="card1">

<div class="image">
    <a href="policydetails.php">
        <img src="policy_details.png">
     </a>
   
</div>
<div class="title">
 <h1>
View Policy Available
</h1>
</div>


</div>

    <div class="card2">

        <div class="image">
            <a href="Buy_new_policy.php">
                <img src="buy_policy.png">
             </a>
           
        </div>
        <div class="title">
         <h1>
        Buy Policy</h1>
        </div>
        </div>
       
<div class="card3">

                <div class="image">
                    <a href="Logs.php">
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
