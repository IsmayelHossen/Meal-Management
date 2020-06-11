<?php   $msg="";?>
<?php 
     include_once 'database/Session.php';
     Session::init();
    
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
   
     font-family: 'Comic Sans MS', cursive, sans-serif;
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
        <a class="nav-link" href="search.php"> <i class="fa fa-search"></i>
     Search</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sendmess.php"> <i class="fa fa-comment-o"></i>
     Send Message</a>
      </li>
     
     
      
           
      

   
    </ul>
    
  </div>
</nav>
<?php 

      if(isset($_POST['submit'])){

        $email=$_POST['email'];
         $phone=$_POST['phone'];
       

        $query="SELECT*FROM addmember WHERE email='$email' AND phone='$phone' ";
          $result12=$ob->select($query);
          $check=mysqli_num_rows($result12);
          if($check>0){
               Session::set("email",$email);
               Session::set("phone",$phone);
             
           ?>
         <div class="container" >
  <h3 style="text-align: center;">Welcome To <?php 
  $query23="SELECT*FROM reg WHERE email='$email'  ";
          $result22=$ob->select($query23);
           $mess=$result22->fetch_assoc();
  echo $mess['messname'];?> Mess</h3>
  <h4 style="text-align:center;"><?php 
  $query1="SELECT mname FROM reg WHERE email='$email' ";
  $result1=$ob->select($query1);
  $count=mysqli_num_rows($result1);
  $row1=$result1->fetch_assoc();
  
  if($count>0){
  echo $row1['mname']." Is The Manager";
}

 ?></h4>
  <h4 style="text-align:center;">Here is total Transaction</h4>
  <button class="btn btn-primary animated bounce  " style="display: block;margin-bottom:8px;margin-left:-12px;" data-toggle="collapse" data-target="#abc">Schedule</button>

                     <div style="max-width:1135px;overflow:scroll;margin-left: -16px;margin-right: -15px;" id="abc" class="collapse animated bounce  ">
                      <h4 style="text-align:center;">Bazar Schedule </h4>
                      <?php if(isset($msg)){
                        echo $msg;
                      } ?>
                        <?php 
          
          $query25="SELECT*FROM bazardate WHERE email='$email' ";
          
                    $result25=$ob->select($query25);
                    $schedule=mysqli_num_rows($result25);
                     if( $schedule>0){
                    ?>
             <table class="table table-striped">
             <tr>
              <th>Name </th>
             <th>Phone</th>
             <th>Date</th>
             
           </tr>         
                <?php 
                    
                   
                       while($row25=$result25->fetch_assoc()){
                        

                    


             ?>
     
  <tr>
    
    <td><?php echo$row25['name'] ?></td>
    <td><?php echo$row25['phone'] ?></td>
    <td><?php echo$row25['date1'] ?></td>
    
    
  </tr>

  <?php }?>
  
</table>

<?php } else{?>   
<h3 style="color:red;text-align:center;"> No Schedule is Available</h3> 
                              
<?php }?>
                     </div>
  <div class="row" style="background: #ededed;box-shadow: 0px 2px 3px 4px #ddd;max-width: 1135px;overflow: scroll;">
    <div class="col-md-12">
      <div>
       <h4 style="text-align: center;padding: 10px;font-family: italic;color:#0b1109e6;text-shadow: 0px 8px 4px #9c9893;">Deposit Amount</h4>
      <table class="table table-hover">

  <?php 
      
          $query="SELECT*FROM deposit WHERE email='$email' ";
          $sum1=0;
                    $result=$ob->select($query);
                    
                    if( $result){
                       while($row7=$result->fetch_assoc()){
                        $sum1=$sum1+$row7['amount'];

                    


             ?>
     
  <tr>
    <td>Date:<?php echo$row7['date1'] ?></td>
    <td>Name:<?php echo$row7['name'] ?></td>
    <td>Phone:<?php echo$row7['phone'] ?></td>
    <td>Deposit Amount:<?php echo $row7['amount'];?></td>
  </tr>

  <?php }?>
  <tr><td colspan="4" style="text-align: right;">Total Deposit:<?php echo$sum1; ?> Taka</td></tr>
</table>
<?php }?>
</div>
</div>
</div>

<div class="row" style="background: #deece8;margin-top: 17px;margin-bottom: 15px;box-shadow: 0px 2px 3px 4px #ddd;max-width: 1135px;overflow: scroll;">
<div class="col-md-12">
  <div>
       <h4 style="text-align: center;padding: 15px;color: #30aea0;text-shadow: 0px 8px 4px #9c9893;">Bazar</h4>
      <table class="table table-striped">

  <?php 
  
          $query="SELECT*FROM bazarcost WHERE email='$email'  ";
          $sum2=0;
                    $result=$ob->select($query);
                    
                    if( $result){
                       while($row8=$result->fetch_assoc()){
                        $sum2=$sum2+$row8['amount'];

                    


             ?>
     
  <tr>
    <td>Date:<?php echo$row8['date1'] ?></td>
    <td>Name:<?php echo$row8['name'] ?></td>
    <td>Phone:<?php echo$row8['phone'] ?></td>
    <td>Bazar Cost:<?php echo $row8['amount'];?></td>
  </tr>

  <?php }?>
  <tr><td colspan="4" style="text-align: right;">Total Bazar:<?php echo$sum2; ?> Taka</td></tr>
</table>
<?php }?>
</div>
</div>


</div>
 
 <div class="row" style="background: #dae5e9;box-shadow: 0px 2px 3px 4px #c4cad1;margin-bottom: 10px;">
<div class="col-md-12">
  <div>
       <h4 style="text-align: center;padding-top: 10px;text-shadow: 0px 8px 4px #9c9893;">Total Meal</h4>
      <table class="table ">

  <?php 
  
          $query="SELECT*FROM mealcount WHERE email='$email' ";
          $sum3=0;
                    $result=$ob->select($query);
                    
                    if( $result){
                       while($row9=$result->fetch_assoc()){
                        $sum3=$sum3+$row9['meal'];

                    


             ?>
     
  

  <?php }?>
  <tr><td colspan="4" style="text-align: right;">Total Meal:<?php echo $sum3; ?> </td></tr>
  <tr><td></td><td>Meal Rate:<?php
  error_reporting(0);
   $rate=$sum2/$sum3;
  
      echo round($rate,2);
       
  ?> Taka</td></tr>
</table>
<?php }?>
</div>
</div>


</div>
<div class="addform" style="box-shadow: 0px 2px 3px 4px #9da1a4;margin-left: -13px;margin-right: -13px;padding-left: 30px;padding-top: 20px;padding-bottom: 20px;padding-right:30px;max-width:1140;overflow:scroll;">
   <h4 style="text-align:center;text-shadow: 0px 8px 4px #9c9893;">All Total Calculation </h4>
  <table class="table table-striped">
    <tr>
     
      <th>Name</th>
    <th>Phone</th>
      <th>Rent</th>
      <th>Net</th>
      <th>Gass</th>
      <th>Khala</th>
      <th>Current</th>
      <th>Water</th>
      <th>Others</th>
      <th class="table-danger" colspan="2">Total Meal</th>
      <th class="table-primary">Total Meal Cost</th>
      <th class="table-success">Total Deposit</th>
      <th>Given(-)/Taken(+)</th>
      <th class="table-warning">Total Amount Must Be Paid</th>
    </tr>
   <?php  
            $final=0;
                $email=Session::get("email");
        $query="SELECT* FROM addmember WHERE email='$email' ";
                    $result=$ob->select($query);
                    
                    if( $result){
                       while($row=$result->fetch_assoc()){
                    
                   


             ?>
     
     
     
  
   <tr>
     <?php 
            Session::set("phone1",$row['phone']);
     ?>
   </tr>
  <?php 
  
    $phone=Session::get("phone1");
     $email=Session::get("email");
    $query="SELECT*FROM addmember WHERE phone='$phone' ";
    $result1=$ob->select($query);
    $count=mysqli_num_rows($result1);
    if($count>0){

    while($row1=$result1->fetch_assoc()){
     
    ?>

  <tr>
   
    <td><?php echo$row1['name'];?></td>
  
    
    <td><?php echo$row1['phone'];?></td>
 
    
    <td><?php echo$row1['rent'];?></td>
  
    
    <td><?php echo$row1['net'];?></td>
  
    
    <td><?php echo$row1['gass'];?></td>
 
    <td><?php echo$row1['khala'];?></td>
  
    
    <td><?php echo$row1['current1'];?></td>
  
    
    <td><?php echo$row1['water'];?></td>
  
    
    <td><?php echo$row1['others'];?></td>
  
    
    <td><?php
     $phone=Session::get("phone1");
     $query="SELECT*FROM mealcount WHERE phone=$phone;";
     $result2=$ob->select($query);
     $meal=0;
     while($row2=$result2->fetch_assoc()){
      $meal=$meal+$row2['meal'];

     }
     echo$meal;


     ?></td>
     <td>
         <?php $rand=rand(10000,100000000000); ?>
          
           <button class=" btn-success animated bounce  "  data-toggle="collapse" data-target="#abcd<?php echo $rand ?>">View</button>

                     <div style="" id="abcd<?php echo $rand; ?>" class="collapse animated bounce  ">
                      <h4 style="text-align:left;">Total Meal</h4>
                    
                 
                  
             <table class="" style="margin:0px auto;display: block;">
             <tr>
            <th>Date</th>
             <th>Meal</th>
             
             
           </tr>         
                <?php 

                     $phone=Session::get("phone1");
          $query26="SELECT*FROM mealcount WHERE  phone='$phone'  ";
          
                    $result26=$ob->select($query26);
                    $schedule1=mysqli_num_rows($result26);
                     if( $schedule1>0){
                       $totalmeal=0;
                   
                       while($row26=$result26->fetch_assoc()){
                        $totalmeal=$totalmeal+$row26['meal'];
 
                    


             ?>
     
  <tr>
    <td><?php echo$row26['date1'] ?></td>
    <td><?php echo$row26['meal'] ?></td>
    
    
    
  </tr>

  <?php }}?>
  <tr>
    <td colspan="2" style="float: right;margin-left: 40px;">
           <?php echo"Total Meal=". $totalmeal;?>
    </td>
  </tr>
  
</table>
</div>
</td>
     

 
     <td><?php 
  $totalmealcharge=$meal*$rate;
    echo$meal."*".round($rate,2)."=".round($totalmealcharge,2) ; ?> Taka</td>
  
     <td><?php
    $phone=Session::get("phone1");
     $query="SELECT*FROM deposit WHERE phone='$phone';";
     $result3=$ob->select($query);
     $deposit=0;
     while($row3=$result3->fetch_assoc()){
      $deposit=$deposit+$row3['amount'];
      echo $row3['amount']."+";

     }
     echo"0=".$deposit;


     ?></td>

  
    <td>
        <?php 
           $giventaken=$deposit-$totalmealcharge;
           echo round($giventaken,2);
         ?>
    </td>
 
    <td>
     <?php
       
       $totalamountpaid=$row1['rent']+$row1['net']+$row1['gass']+$row1['khala']+$row1['current1']-($giventaken);
        $final=$totalamountpaid+$final;
       echo ceil($totalamountpaid)." Taka";
      ?>
    </td>
 

  <?php }} }}?>
<tr>
  
  <td colspan="15" style="text-align:right;"><?php echo "All Total Amount=".$final; ?></td>
</tr>
  </table>
</div>
</div>
        
  <?php }else{ ?>
   <h2 style="
  color: red;
  text-align: center;
  padding-top: 100px;
  margin-left: 30px;
  margin-right: 30px;
  padding-bottom: 240px;
">Your Mess Email  Or Mess Name Or Phone Number Is Wrong.So Please Try Again With Valid Email,Phone,Mess Name!</h2>
   <?php  }}?>





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