<?php 
     include_once 'database/Session.php';
     Session::checkSession();
    
    ?>
    <?php include("database/Formet.php");
      $fm=new Format();
     ?>

   
    <?php include_once 'database/Connection.php'; 
        $ob=new Database();
    ?>
<?php 
   $date=date('d-m-y');
   
 ?>
 <?php  
$email=Session::get("email");
 ?>



    
         

                  <?php 
                 
  if(isset($_POST['submit'])){
    if(isset($_GET["update"]))
                   {
                      $date1=$_GET["update"];
                    }

   $attend=$_POST['attend'];
   
   
  $email=Session::get("email");
      
    
         
        
        
    
      
       foreach ($attend as $key1 => $value) {
        if($value=="A")
        {
          $query="UPDATE mealcount set meal=0 WHERE phone='$key1' AND email='$email' AND date1='$date1' ";
          $result=$ob->update($query);
          
        }

        elseif($value=="B")
        {
            $query="UPDATE mealcount set meal=.5 WHERE phone='$key1' AND email='$email' AND date1='$date1' ";
          $result=$ob->update($query);
          
        }
        elseif($value=="C")
        {
            $query="UPDATE mealcount set meal=1 WHERE phone='$key1' AND email='$email' AND date1='$date1' ";
          $result=$ob->update($query);
          
        }
        elseif($value=="D")
        {
            $query="UPDATE mealcount set meal=1.5 WHERE phone='$key1' AND email='$email' AND date1='$date1' ";
          $result=$ob->update($query);
          
        }
        elseif($value=="E")
        {
            $query="UPDATE mealcount set meal=2 WHERE phone='$key1' AND email='$email' AND date1='$date1' ";
          $result=$ob->update($query);
          
        }
        elseif($value=="F")
        {
            $query="UPDATE mealcount set meal=2.5 WHERE phone='$key1' AND email='$email' AND date1='$date1' ";
          $result=$ob->update($query);
          
        }
        elseif($value=="G")
        {
            $query="UPDATE mealcount set meal=3 WHERE phone='$key1' AND email='$email' AND date1='$date1' ";
          $result=$ob->update($query);
          
        }
        elseif($value=="H")
        {
            $query="UPDATE mealcount set meal=3.5 WHERE phone='$key1' AND email='$email' AND date1='$date1' ";
          $result=$ob->update($query);
          
        }
        elseif($value=="I")
        {
            $query="UPDATE mealcount set meal=4 WHERE phone='$key1' AND email='$email' AND date1='$date1' ";
          $result=$ob->update($query);
          
        }
        elseif($value=="J")
        {
            $query="UPDATE mealcount set meal=4.5 WHERE phone='$key1' AND email='$email' AND date1='$date1' ";
          $result=$ob->update($query);
          
        }
        elseif($value=="K")
        {
      $query="UPDATE mealcount set meal=5 WHERE phone='$key1' AND email='$email' AND date1='$date1' ";
          $result=$ob->update($query);
          
        }
        elseif($value=="L")
        {
            $query="UPDATE mealcount set meal=6 WHERE phone='$key1' AND email='$email' AND date1='$date1' ";
          $result=$ob->update($query);
          
        }



       
       }

        if($result){
          
        $email=Session::get("email");
        $query="SELECT* FROM addmember WHERE email='$email' ";
         $result123=$ob->select($query);
         
    while ($row123=$result123->fetch_assoc()) {
                 
                  $to=$row123["blood"];
                      $subject = "About Meal Management Update Data";
                        $txt ="(".$date1.") This Day Data Has Been Updated By Manager ";
                        
                  $headers  = 'MIME-Version: 1.0' . "\r\n";
               $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";      
                 $headers .= "From:meal-management@gmail.com" . "\r\n" ;
                 $message = '<html><body>';
               $message .='<table class="table table-striped">
    <thead>
      <tr>
        <th>Previous Meal Amount</th>
        <th>Present Meal Amount</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>';
    $message.=  $querystock1="SELECT*FROM mealcount WHERE email='$email' AND date1='$date1' ";
   $resultstock1=$ob->select($querystock1);
   if($resultstock1){
      while($rowstock1=$resultstock1->fetch_assoc()){$rowstock1['meal'];
      }
   } ;
       
        $message .='</td>
        <td> '.$date1.'</td>
       
      </tr><tbody></table>';
                   $message .= '</body></html>';
                

                    mail($to,$subject,$message,$headers);
    }
          $msg="<div style='text-align:center;margin-top:5px;' class='alert alert-success alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>Updated Successfully
  </div>";
            
              
                   
          }
          else{
             $msg="<div style='text-align:center;margin-top:5px;' class='alert alert-danger alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>Please Try Again
  </div>";
               
                    
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
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/stylem.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
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
        width:177px;
      }
   .form2 {
    max-width: 100%;
    max-width: 416px;
    margin: 0 auto;
    display: block;
    margin-top: 8px;
    border: 10px solid #ddd;
    border-radius: 10px;
    background: #d1d1d166;
    margin-bottom: 30px;
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
.basic {
  text-align: center;
  padding-top: 0px;
  /* background: #efefef; */
  /* color: #f0212166; */
  color: #000;
  padding-bottom:0px;
  box-shadow: 0px 5px 7px #c9ced4;
  margin-top: 11px;
  margin-bottom: 12px;
  border-radius: 1px;
}
.extra {
  background: #f2f2f2;
  margin-top: 8px;
  box-shadow: 0px 2px 3px #a4a4a4;
  padding-top: 10px;
  padding-bottom: 10px;
}
.addform {
  border: 9px solid #e9e9e9;
  padding: 36px 10px;
  box-shadow: 0px 5px 7px #c9ced4;
  margin-bottom: 10px;
  margin-top: 14px;
  background: #dee5ec;
  
}
.formmain{
  max-width: 600px;
  margin: 0px auto;
  display: block;
}
.img1 {
  vertical-align: middle;
  border-style: none;
  width: 60px;
  height: 60px;
  border-radius: 50px;
  margin: 0 auto;
  display: block;
  /* padding-top: 10px; */
  margin-top: -9px;
}
input[type="radio"] {
   margin-left:4px;
}
</style>
</head>
<body>
 <?php  if(isset($_GET['action']) && $_GET['action']=='logout')
                               Session::destroy();

                        ?>
                       
<nav class="navbar navbar-expand-md  navbar-dark mx-auto sticky-top " style="background: #F5F5F5;clear: both;" >
  <a class="navbar-brand" href="home.php"><img src="img/logo1.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="background:#e15656;color: #f9f9f9;">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto ">
       <?php 
        $email=Session::get("email");
        $query="SELECT* FROM addmember WHERE email='$email' ";
         $result=$ob->select($query);
         $row=mysqli_num_rows($result);
         if($row>0){


      ?>
      <li class="nav-item ">
        <a class="nav-link" href="members.php"><i class="fa fa-users"></i>Members<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="remessage.php"><i class="fa fa-comment-o"></i>Message<span class="sr-only">(current)</span></a>
      </li>
      <?php };?>
      
       
      <li class="nav-item ">
        <a class="nav-link" href="bazarshedule.php"><i class="fa fa-list-alt"></i>Bazar Schedule <span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item ">
        <a class="nav-link" href="bazarcost.php"><i class="fa fa-qrcode"></i>Bazar Cost <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="transition1.php"><i class="fa fa-calculator"></i>Calculation<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="?action=logout">Logout <span class="sr-only">(current)</span></a>
      </li>




    </ul>
  </div>
   
  
</nav>
 <?php 
        error_reporting(0);
 $email=Session::get("email");
                
   $query="SELECT*FROM addmember WHERE email='$email' ";
   $result=$ob->select($query);
   $able=mysqli_num_rows($result);
   if($able<=0){
    ?>
    <div class="container">
      <h3 style="font-size: 1.75rem;padding: 93px 20px;text-align: center;color: red;">Please,At First Add Somes Member To Continue This Whole Process.Thanks</h3>
    </div>
    <?php } else{ ?>
<div class="container" style="margin-bottom: 83px;">
  <div class="date">
    <h3 style="text-align: center;padding-top: 10px;">Update Daily Meal Count</h3>
    <h4><?php if(isset($_GET['update'])){
         $date1=$_GET['update'];
         echo"Date:". $date1;
      }?></h4>
    <?php if(isset($msg)){
      echo $msg;
    }
      ?>
      

  </div>
  <form action="" method="post">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Meal</th>
       
        
      </tr>
    </thead>
    <tbody>
   <?php 
        error_reporting(0);
 $email=Session::get("email");
      if(isset($_GET['update'])){
         $date1=$_GET['update'];
      }          
    $query="SELECT DISTINCT mealcount.*,addmember.name FROM mealcount   INNER JOIN addmember ON addmember.phone=mealcount.phone WHERE  mealcount.email = '$email' AND mealcount.date1='$date1'  ";
   $result=$ob->select($query);
   if($result){
         $i=1;
       while($row=$result->fetch_assoc()){

          ?>
          <tr>
            <td><?php echo$i++;?></td>
           
           <td><?php echo$row['name'];?></td>
            <td><?php echo$row['phone'];?></td>
             
               <td>
                 <td> <input type="radio" name="attend[<?php echo$row['phone']?>]" value="A"<?php
                      
                     if($row['meal']==0){
                        echo"checked";

                    }?>>0
                     <input type="radio" name="attend[<?php echo$row['phone']?>]" value="B"<?php 
                       
                     if($row['meal']==.5){
                        echo"checked";
                     }
                    ?>>.5
                    <input type="radio" name="attend[<?php echo$row['phone']?>]" value="C"<?php 
                       
                     if($row['meal']==1){
                        echo"checked";
                     }
                    ?>>1
                    <input type="radio" name="attend[<?php echo$row['phone']?>]" value="D"<?php 
                       
                     if($row['meal']==1.5){
                        echo"checked";
                     }
                    ?>>1.5
                    <input type="radio" name="attend[<?php echo$row['phone']?>]" value="E"<?php 
                       
                     if($row['meal']==2){
                        echo"checked";
                     }
                    ?>>2
                    <input type="radio" name="attend[<?php echo$row['phone']?>]" value="F"<?php 
                       
                     if($row['meal']==2.5){
                        echo"checked";
                     }
                    ?>>2.5
                    <input type="radio" name="attend[<?php echo$row['phone']?>]" value="G"<?php 
                       
                     if($row['meal']==3){
                        echo"checked";
                     }
                    ?>>3
                    <input type="radio" name="attend[<?php echo$row['phone']?>]" value="H"<?php 
                       
                     if($row['meal']==3.5){
                        echo"checked";
                     }
                    ?>>3.5
                    <input type="radio" name="attend[<?php echo$row['phone']?>]" value="I"<?php 
                       
                     if($row['meal']==4){
                        echo"checked";
                     }
                    ?>>4
                    <input type="radio" name="attend[<?php echo$row['phone']?>]" value="J"<?php 
                       
                     if($row['meal']==4.5){
                        echo"checked";
                     }
                    ?>>4.5
                    <input type="radio" name="attend[<?php echo$row['phone']?>]" value="K"<?php 
                       
                     if($row['meal']==5){
                        echo"checked";
                     }
                    ?>>5
                    <input type="radio" name="attend[<?php echo$row['phone']?>]" value="L"<?php 
                       
                     if($row['meal']==6){
                        echo"checked";
                     }
                    ?>>6
                     
                    </td>
          </tr>
          <?php }}?>
         
        </tbody>
      </table>
     
       <input type="submit" name="submit" value="Update " class="btn btn-success" style="float:right;margin-bottom:10px;
}"> 
    </form>

  
</div>

</div>
</div>
<?php }?>
<div class="container" >


 

  <div class="row addextra" style="margin-bottom: 20px">
          <div class="col-md-4">
            <div class="animated slideInLeft yourElement">
            <h4 class="bb" style="background:#ea721ae6;padding: 60px 54px;color: #f9f9f9;"><a href="addmember.php" style="text-decoration:none;color:#f6f1f1">Add Member</a> </h4>
          </div>
          </div>

           <div class="col-md-4">
           <div class="animated flip yourElement1">
            <h4 class="bb" style="background: #67baef;padding: 60px 54px;color: #fff;"><a href="deposit.php" style="text-decoration:none;color:#f6f1f1">Deposit</a> </h4></h4>
          </div>
          </div>

           <div class="col-md-4">
            <div class="animated slideInRight yourElement2">
           <h4 class="bb" style="background:#2fb7a4;padding: 60px 54px;color: #fff;"><a href="mcount.php" style="text-decoration:none;color:#f6f1f1">Daily Meal Count</a></h4>
          </div>
          </div>

  </div>
</div>

<div class="container">
  <h4 style="text-align: center;padding: 20px 10px;background: #a0e7e4">Powered By Dept. Of ICT,MBSTU@2019</h4>
  
</div>
</body>
</html>

