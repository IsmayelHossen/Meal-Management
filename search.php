<?php 
ob_start();
     include_once 'database/Session.php';
     $msg="";
    
    ?>
    <?php include("database/Formet.php");
      $fm=new Format();
     ?>

   
    <?php include_once 'database/Connection.php'; 
        $ob=new Database();
    ?>

    
    


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Meal Management</title>
    <link rel="icon"  href="img/logo1.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/stylem.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
   <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

<style type="text/css">

body{
    font-family:'Acme';
     font-family: "Times New Roman", Times, serif;
    }
  
   .navbar-dark .navbar-nav .active > .nav-link:hover{
   
        color:red;

   }
   
   .navbar-dark .navbar-nav .nav-link:hover{
  color: rgba(251, 6, 6, 0.75);
}
      .dropdown .dropdown-menu .dropdown-item:hover {
  background: #D6E0E0;
  color: black;
  display: block;
}
      .navbar-dark .navbar-nav .nav-item{
        width:180px;
      }
   .form2 {
  max-width: 100%;
  max-width: 416px;
  margin: 0 auto;
  display: block;
  margin-top:20px;
  border: 10px solid #f2f2f2;
  border-radius: 10px;
  background: #fff6;
  margin-bottom:50px;
  box-shadow: 0px 2px 3px 4px #d7d7d7;
}
      .form3  {
    font-size: 2rem;
    text-align: center;
    padding-top: 10px;
    box-sizing: border-box;
    /* box-shadow: 0px 3px; */
    border-bottom: 11px solid #d2d2d2;
    text-shadow: 2px 3px 2px #9b8b7f;
    padding-bottom: 4px #456;
   
    border-radius: 52px;
    padding-bottom: 6px;
}


label {
    display: inline-block;
    margin-bottom: 0.5rem;
    font-size: 21px;
    font-family: 'Acme';
    text-align: center;
}
.footer {
  background: #0FA187;
  height: auto;
  color: #d2d2d2;
  padding-bottom: 42px;
  padding-top: 41px;
  text-align: center;
}
.facebooklogo  {
    font-size: 2rem;
    width: 40px;
    height: 40px;
    background: #3560B7;
    border-radius: 50px;
   
    color: #fefefe;
}
.navbar-dark .navbar-brand {
    color:red;
    width: 70px;
    height: 70px;
    border-radius: 50px;
   
}
.dropdown .dropdown-menu .dropdown-item {
  background: #EFF2F1;
  color: #d53131;
  display: block;
  font-family: 'Acme';
  font-size: 20px;
}

img {
  vertical-align: middle;
  border-style: none;
  width: 99px;
  height: 82px;
  border-radius: 50px;
  margin: 0 auto;
  display: block;
  /* padding-top: 10px; */
  margin-top: -9px;
}

.indi {
  box-shadow: 0px 2px 3px 4px #c2c3c5;
  padding-top: 20px;
  padding-bottom: 20px;
  margin-top: 13px;
  border-radius: 6px;
  background: #e1e6ea;
}
.navbar-dark .navbar-nav .show > .nav-link, .navbar-dark .navbar-nav .active > .nav-link, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .nav-link.active {
  color: #d81313;
}
.navbar-dark .navbar-nav .nav-link {
  color: rgba(242, 18, 18, 0.5);
  font-size: 20px;
  padding: 10px 16px;
}
.footer {
  background: #F2F2F2;
  margin-top: 18px;
  outline-offset: 5px;
  outline: 4px solid #e7e6e6;
  border-radius: 6px;
  color:#0B8D8D;
}
.face {
  width: 35px;
  height: 35px;
  border-radius: 62px;
  background: #085bae;
  color: #f5eeee;
  margin: 0 auto;
  display: block;
  text-align: center;
  padding-top: 2px;
  margin-bottom: 6px;
  font-size: 26px;
  display: inline-block;
}
</style>
</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-dark mx-auto sticky-top " style="background: #F5F5F5;

clear: both;

" >
  <a class="navbar-brand" href="index.php"><img src="img/logo1.png"></a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background:#e15656;color: #f9f9f9;">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto ">
     
      <li class="nav-item">
        <a class="nav-link" href="reg.php"> <i class="fa fa-user"></i>
     Registration</a>
      </li>
     
    <li class="nav-item">
        <a class="nav-link" href="Search.php"> <i class="fa fa-search"></i>
     Search</a>
      </li>
     
     
     
      
           
      

   
    </ul>
    
  </div>
</nav>

<div class="container animated slideInLeft ">
  <div class="row">
    <div class="col-md-9">
  
    <div class="form2 slide ">
      
        <h2 class="form3 animated  rotateInDownRight">Search</h2>
  <form action="search1.php" method="post" >
     <?php 
  if(isset($msg)){
     echo $msg;
  }
    ?>
  <div class="form-group animated bounceInLeft">
    <label for="email" class="text-center">Email address</label>
   
    <input type="email" class="form-control" id="email" required="" name="email" placeholder="Mess Email..." >
  </div>
  
  
  
 <div class="form-group animated bounceInRight">
    <label for="pwd">Phone</label>
    <input type="text" class="form-control" required="" name="phone" placeholder="Phone Number Which is Exists This Platform" >
  </div>
   <div class="form-group">

  <button type="submit" class="btn btn-success animated slideInLeft " name="submit" >Search</button>
</div>

</form>
</div>
</div>
<div class="col-md-3"><ul>
 
 <li style="list-style-type:none"><i class="fa fa-hand-o-right" aria-hidden="true" style="font-size: 30px;"></i>
      <ul>
        <li style="list-style-type:none"><i class="fa fa-hand-o-down" aria-hidden="true" style="font-size: 35px;"></i>
  <h5 style="text-align:left">To Get Individual Mess Member All Informations Search By Mess Email & Your Phone Number Which is Exists This Platform.Thanks</h5></li>
      </ul>
  </li>
</ul>
  
</div>
</div>
</div>



<div class="container-fluid" style="padding-right:0px;padding-left:0px;">
    <div class="footer">
  <div class="row">
    <div class="col-sm-12 col-lg-12 ">
      <h3 style="">Powered by Dept. of ICT,MBSTU&copy 2019</h3>
    </div>
    
      

  
  </div>
</div>
</div>


</body>
</html>