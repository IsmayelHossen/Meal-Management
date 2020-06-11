<?php 
ob_start();
include("database/Session2.php");
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
          <h3>Admin Panel Meal Management</h3>
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
        <h3 style="text-align:center;">Live Cheat</h3>
         <div style="max-width: 500px;margin: 0 auto;display: block;background: #e0e0e0;text-align:right;">
    <?php 
    
      $query="SELECT*FROM reg  ";
      $result=$db->select($query);
      $result5=mysqli_num_rows($result);
      if($result5>0){

        while($row=$result->fetch_assoc()){
    ?>
   <h4 style="max-width: 220px;background: #dadcde">
    <span class="badge badge-info">5</span> <a class="btn btn-success" style="width:170px;" href="replym.php?reply=<?php echo$row['email'] ?> & reply1=<?php echo$row['messname'] ?> " ><?php echo $row['messname'] ?></a>
   </h4>
   <?php }} else{ ?>
    <h3>No Mess Exists Yet</h3>
    <?php }?>
  </div>
  
      
         </div>
       </div>
</div>

<div class="container-fluidf">
    <div class="panel panel-footer">
       <h3 style="text-align: center;">Developed By McubI</h3>
    </div>
  </div>
</body>
</html>


