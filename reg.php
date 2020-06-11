<?php 
ob_start();
$msg="";
     include_once 'database/Session.php';
      include("database/Formet.php");
      $fm=new Format();
      include_once 'database/Connection.php'; 
        $ob=new Database();
    ?>
 <?php 
if(isset($_POST['submit'])){
       $uname=$_POST['uname'];
        $email=$_POST['email'];
         $password=$_POST['password'];
           $repassword=$_POST['repassword'];
       
          
        $email=$fm->validation($email);
        $password=$fm->validation($password);
         $repassword=$fm->validation($repassword);
        

       
         
    
  
        if($password!=$repassword){
           $msg="<div class='alert alert-danger'><span>Password Not Matched!</span></div>";

        }
        elseif(strlen($password)<8){
             $msg="<div class='alert alert-danger'><span>Your Password Length Must be at least 8 characters</span></div>";
        }
      
        else{
             $query="SELECT*FROM reg WHERE messname='$uname' OR email='$email'  ";
              $result=$ob->select($query);
               $row=$result->fetch_assoc();
               
                  if($row['messname']==$uname){
                    $msg="<div class='alert alert-danger'><span>This Mess Name Is Already Exists.Please Try To Different Name To Registration!.Thank You   </span><span style='max-width: 20px;max-height: 20px;border-radius:50%;border: 2px solid #d8857f;padding-bottom: 8px;padding-left: 5px;padding-right: 5px;'>-_-</span></div>";
                }
                
                 

                  else{ 
                          if($row['email']==$email){
                          $msg="<div class='alert alert-danger'><span>This Email Is Already Exists.Please Try To Different Email To Registration!</span></div>";

                }
                    else{
                        $code=rand(10000,100000);
                    $query1="INSERT INTO reg(email,password,messname,code) VALUES('$email','$password','$uname','$code') ";
                    $result=$ob->insert($query1);
                 
                    if($result){
                      $to = "$email";
                      $subject = "Your Meal Management Verification Code";
                        $txt ="Code: ".$code;
                 $headers = "From:meal-management@gmail.com" . "\r\n" ;

                    mail($to,$subject,$txt,$headers);
                    header("Location:verification.php");
                  }
                   else{
                   $msg="<div class='alert alert-danger'><span>Please Try Again!</span></div>";

                 }

                }
              }
            }
           

        }

      



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
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
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
  max-width: 477px;
  margin: 0 auto;
  display: block;
  margin-top: 8px;
  border: 10px solid #f2f2f2;
  border-radius: 4px;
  background: #f6f6f666;
  margin-bottom: 30px;
  box-shadow: 0px 2px 3px 4px #b9bec3;
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
}
.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
    margin-bottom: 16px;
}
.bg-info {
  background-color:#40BF79;
  color: #fffdfd;
  font-size: 18px;
}
.form-group {
  margin-bottom: 1rem;
  text-align: center;
  font-family: italic;
  font-family: 'Acme';
  text-shadow: 2px 2px #ecdedd;
}
.form-control {
  display: block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  text-align: center;
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
        <a class="nav-link" href="search.php"> <i class="fa fa-search"></i>
     Search</a>
      </li>

        
   
    </ul>
    
  </div>
</nav>


<div class="container slideanm">
    <div class="form2 slide">

        <h2 class="form3"> Registration</h2>
  <form action="reg.php" method="post">
     <div class="form-group">
      <?php  if(isset($msg)){
        echo $msg;
    } ?>
    <div class="form-group">
    <input type="text" class="form-control" id="name" name="uname" placeholder="Mess Name" required="">
</div>
  <div class="form-group">
   
    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required="">
  </div>
  <div class="form-group">
   
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">
  </div>
   <div class="form-group">
  
    <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Re Password" required="">
  </div>
   
   <div class="form-group">

  <button type="submit"  class="form-control " name="submit" style="background:#40BF79;color: #ddd;" >Submit</button>
</div>
<div class="form-group">
<a href="index.php" style="">Already Registration?Login</a>
</div>
</form>
</div>

</div>
</div>
<div class="container-fluid" style="padding-right:0px;padding-left:0px;">
    <div class="footer">
  <div class="row">
    <div class="col-sm-12 col-lg-12 ">
     <h4 >Powered By Dept. Of ICT,MBSTU@2019</h4>
    </div>
    
      

  
  </div>
</div>
</div>


</body>
</html>