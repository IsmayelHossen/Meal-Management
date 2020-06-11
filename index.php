<?php 
  ob_start();
     include("database/Session.php");
     
    
    ?>
    <?php require("database/Connection.php"); 
        $ob=new Database();
    ?>

    <?php 

      if(isset($_POST['submit'])){

        $email=$_POST['email'];
         $password=$_POST['password'];
         $email=mysqli_real_escape_string($ob->link,$email);
         $password=mysqli_real_escape_string($ob->link,$password);
      
     $query="SELECT*FROM reg WHERE email='$email' AND password='$password' ";
              $result=$ob->select($query);
               $row=$result->fetch_assoc();
        if(empty($email)||empty($password)){
           $msg="<div class='alert alert-danger'><span>Field Must Not Be Empety!</span></div>";

        }
          elseif($row['active']=='0'){
             $msg="<div class='alert alert-danger'><span>Your id is disabled!</span></div>";
           }
        else{
             $query="SELECT*FROM reg WHERE email='$email' AND password='$password' ";
              $result=$ob->select($query);
              if( $row=$result->fetch_assoc()){
                Session::init();
                  Session::set("login",true);
                  Session::set("email",$row['email']);
                   Session::set("messname",$row['messname']);
                        if(!empty($_POST["remember"])) {
               setcookie ("email",$_POST["email"],time()+ (10 * 365 * 24 * 60 * 60));
                setcookie ("password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
               } 
               else {
                    if(5<6){
               setcookie ("email","");
               setcookie ("password","");
          }
               }
         
                  

                  echo"<script>window:location='home.php'</script>";
              }
              else{
                 $msg="<div class='alert alert-danger'><span>Password Or Mess Email Wrong!</span></div>";

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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
   <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-7472876793649569",
    enable_page_level_ads: true
  });
</script>
<script async src="//pagead2.googlesyndication.com/
pagead/js/adsbygoogle.js"></script>
<script>
(adsbygoogle = window.adsbygoogle || []).push({
google_ad_client: "pub-7472876793649569",
enable_page_level_ads: true
});
</script> 
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
  margin-top: 8px;
  border: 10px solid #f2f2f2;
  border-radius: 10px;
  background: #fff6;
  margin-bottom: 30px;
  box-shadow: 0px 2px 3px 4px #d7d7d7;
  
	font-weight: bold;
	color: #456;

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
    font-weight: bold;
 color:#456
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
.form-control {

	color: #456;

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



<div class="container animated slideInLeft ">
    <div class="form2 slide ">

        <h2 class="form3 animated  rotateInDownRight">Log In</h2>
  <form action="index.php" method="post" >
     <?php 
  if(isset($msg)){
     echo $msg;
  }
    ?>
  <div class="form-group animated bounceInLeft">
    <label for="email" class="text-center">Email address</label>
   
    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>">
  </div>
  <div class="form-group animated bounceInRight">
    <label for="pwd">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
  </div>
  <div class="form-group form-check animated rollIn">
    <label class="form-check-label">
  <input name="remember" class="form-check-input" type="checkbox" <?php if(isset($_COOKIE["password"])) { ?> checked <?php } ?> /> Remember me
    </label>
  </div>
   <div class="form-group">

  <button type="submit" class="btn btn-success animated slideInLeft " name="submit" >Submit</button>
</div>
<div class="form-group">
<a href="#" style="float: right;margin-top: -26px;">Forget Password?</a>
</div>
</form>
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