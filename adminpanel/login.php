<?php 
   ob_start();
     include("database/Session2.php");
     $msg="";
    
    ?>
    <?php include("database/Formet.php");
      $fm=new Format();
     ?>

   
    <?php include_once 'database/Connection.php'; 
        $ob=new Database();
    ?>

    <?php 

      if(isset($_POST['submit'])){

        $email=$_POST['email'];
         $password=$_POST['userpass'];


        $email=$fm->validation($email);
        $password=$fm->validation($password);
       
   
    
  
        if(empty($email)||empty($password)){
           $msg="<div class='alert alert-danger'><span>Field Must Not Be Empety!</span></div>";

        }
        else{
             $query="SELECT*FROM admin WHERE user='$email' AND password='$password' ";
              $result=$ob->select($query);
              if( $row=$result->fetch_assoc()){
                Session::init();
                  Session::set("login",true);
                
                  echo"<script>window:location='home.php'</script>";
              }
              else{
                 $msg="<div class='alert alert-danger'><span>Password Or User Email Wrong!</span></div>";

              }

        }

      }



    ?>
    

 <!DOCTYPE html>
 <html>
 <head>
   <title>Admin Login</title>
   <link rel="stylesheet" type="text/css" href="boot/css/bootstrap.css">
  
    <link rel="icon"  href="img/mbstu2.png">
    <meta name="description" content="Mbstu Admission Test">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  
   <style type="text/css">
   body{
     
     font-family:'Acme';
      font-size: 20px;
   }
  
   .main{
    
    
      background:url('main6.jpg');
     
  /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; 
    }

    .login {
  max-width: 300px;
height:357px;
  margin: 0 auto;
  display: block;
  /* top: 50%; */
  /* left: 42%; */
  /* position: absolute; */
  background: #e1e3e6;
  opacity: 0.7;
  margin-top: 17%;
  border-radius: 4px;
   text-align:center; 
}
label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: bold;
  padding: 0px 14px;
  font-family: "Times New Roman", Times, serif,'Acme';
  text-align: center;
  color: #0f2bf5;
}
.btn-primary {
  color: #fff;
  background-color: #337ab7;
  border-color: #2e6da4;
  /* margin-left: 10px; */
  margin-bottom: 10px;
  float: right;
 
}
img {
  width: 80px;
  height: 80px;
  border-radius: 100px;
  margin: 0px auto;
  display: block;
  /* margin-top: -70px; */
  /* top: -50%; */
  position: relative;
  top: -37px;
}
.alert {
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid transparent;
  border-radius: 4px;
  font-size: 14px;
}
.login:hover {
  
  transition: 0.3s;
  border-radius: 3px;
  background:#A6A6A6;
  opacity: .7;
}
   </style>
   
 </head>
 <body>
  
 <div class="container-fluid" >
   <div class="main img-responsive" style="height:auto, max-width:100%">
     <div class="container">
      <div class="login ">

      <form action="login.php" method="post">
       <img src="log.png">
 <?php echo$msg; ?>
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter Email...........">
  </div>
  <div class="form-group">
    <label for="pwd">Password</label>
    <input type="password" class="form-control" id="pwd" name="userpass" placeholder="Enter Password........">
  </div>
  <button type="submit" class="btn btn-primary"  name="submit" style="margin-right: 10px;">Submit</button>
</form>
</div>
       
     </div>

   </div>.
  
 </div>

 
 </body>
 </html>