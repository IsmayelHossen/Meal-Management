<?php 
ob_start();
  include_once'database/Session2.php';
   Session::checkSession();
?>
  

<?php
    $msg=" ";
   
     include("database/Connection.php");
     include("database/Formet.php");
      $db = new Database();
      $fm=new Format();
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <title>MCubS It Limited</title>
    <link rel="icon"  href="images/ictlogo.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="boot/css/bootstrap.css">

<script src="boot/js/jquery.js"></script>
<script type="text/javascript" src="boot/js/bootstrap.js"></script>
 
<script type="text/javascript" src="boot/js/main2.js"></script>

  <link rel="stylesheet" type="text/css" href="style.css">
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
<style type="text/css">
  body{
    font-family:'Acme';

  }
  label{
      font-size:20px;
  }
  .side ul li a{
                    text-decoration: none;
                  }
</style>
</head>
<body>

       <?php  if(isset($_GET['action']) && $_GET['action']=="logout")
                               Session::destroy();
?>
      
   

  
  
  

  
  <div class="container-fluidh">
    <div class="Jumbotron">
          <h3>Admin Panel Mbstu Admission</h3>
    </div>

  </div>
  <div class="container-fluidm">
      <div class="row">
        <div class="col-md-3">
          <div class="side">
               <ul>
               
                <li>
                 <a href="home.php" >Dashbord</a>
                  </li>
            <li> <a href="membermess.php" style="text-decoration: none;" >All Mess List </a></li>
             <li> <a href="message.php" style="text-decoration: none;" >Messages </a></li>
      
         <li><a href="?action=logout" >Logout</a></li>
        </ul>


    </div>
  </div>
       <div class="col-md-9">
      
            <h3 style="text-align: center;border-bottom: 2px solid #becfe0;padding: 3px 4px;text-shadow: 0px 1px #da4c4c;">All Messages</h3>
           

    
</div>


</body>
</html>


