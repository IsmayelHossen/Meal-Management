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


 <?php 


      if(isset($_POST['submit'])){
         
       $text1=$_POST['text1'];
       if(empty($text1)){
         $msg="PLZ Write Something!";
       }
       else{
       $text2=$text1;
       $text2=str_replace("'", "\'", $text2);
          $email=Session::get("email");
          $date=date('y/m/d');
          
        $query2="INSERT INTO chat1(email,text1,identiy,time1) VALUES('$email','$text2','Author',now())";
        $result2=$db->insert($query2);
      }
    }
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
        <h5 style="text-align: center;">To</h5>
        <h4 style="text-align:center;">
          <?php
               if(isset($_GET['reply1'])){
          $messname=$_GET['reply1'];
          echo  $messname;
       

        }  ?>
        </h4>
       <div style="max-width:450px;margin:0 auto;display:block;height:300px;overflow-y:scroll;background:#1ecb51;color: #ddd;">
    <h2 style="text-align:center;"><?php echo Session::get("messname1");?></h2>
    <h5 style="text-align:right;"><a href="" class="btn btn-danger" style="margin-right:5px">Delete</a></h5>
   <?php
        if(isset($_GET['reply'])){
          $email=$_GET['reply'];
          Session::set("email", $email);

        }
         
          $query="SELECT*FROM chat1 WHERE email='$email' ORDER BY id DESC";
          $result=$db->select($query);
          $count=mysqli_num_rows($result);
          if($count>0){
              while($row=$result->fetch_assoc()){
          

       ?>
       <?php 
          if($row['identiy']=='Author'){
        ?>
       <p style="color: #101111;border: 2px solid #b9c6d4;max-width: 305px;margin-left: 20px;padding: 10px;border-radius: 16%;"><?php echo$row['text1'];?><br><?php $date = $row['time1'];
               echo date('d/m/y  h.i a', strtotime($date));?></p>
       <?php }else{?>
       <p style="color: #ddd;border: 2px solid #305757;max-width: 305px;margin-left: 20px;padding: 10px;border-radius: 16%;"><?php echo$row['text1'];?><br><?php $date = $row['time1'];
               echo date('d/m/y  h.i a', strtotime($date));?></p>
       <?php }?>
       <?php }}else{?>
        <p>Send Message To Mess Member</p>
        <?php } ?>
    
  </div>
<div style="max-width:450px;margin:0 auto;display:block;background: #0c0c0c;color: #ddd;">

 <form class="" method="post" enctype="multipart/form-data">
 
   
  
   
    
  
  <textarea class="form-control" required="" rows="5" id="comment" name="text1" placeholder=" Write Something & Send Message To Member....Notice:After Every Conversation End Please Delete All Messages To Get New Message Notification.Thanks "></textarea>

      
    </textarea>
  
       
          
    
      <input type="submit" class="btn btn-primary " style="float: right;margin-top: 4px;padding: 7px 22px" name="submit" value="Send">          


</form>

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


