<?php 
     include_once 'database/Session.php';
     Session::checkSession();
    
    ?>
  
   <?php   $msg="";?>
<?php 
     
      include("database/Formet.php");
      $fm=new Format();
      include_once 'database/Connection.php'; 
        $ob=new Database();
    ?>

    <?php 


      if(isset($_POST['submit'])){
        
       $name=$_POST['name'];
        $phone=$_POST['phone'];
        $amount=$_POST['amount'];
        $date1=$_POST['date1'];
         $name=mysqli_real_escape_string($ob->link,$name);
          $phone=mysqli_real_escape_string($ob->link,$phone);
           $amount=mysqli_real_escape_string($ob->link,$amount);
            $date1=mysqli_real_escape_string($ob->link,$date1);
          if(empty($name) ||empty($phone)||empty($amount)||empty($date1)){
             $msg="<div class='alert alert-danger'><span>Field Must Not be empty!</span></div>";
          }
        else{
    
                    $email=Session::get("email");
                    $query1="INSERT INTO deposit(name,phone,amount,date1,email) VALUES('$name','$phone','$amount','$date1','$email') ";
                    $result=$ob->insert($query1);
                    
                  if($result){
                    $msg="<div class='alert alert-success'><span> Add Successfully</span></div>";

                  }
                   else{
                   $msg="<div class='alert alert-danger'><span>Please Try Again!</span></div>";

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
#category:focus option:first-of-type {
    display: none;
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



<div class="container" >
<div class="basic">
  <?php
  if(isset($msg)){
    echo $msg;
   
  }
  ?>
</div>


<?php 
        error_reporting(0);
 $email=Session::get("email");
                
   $query="SELECT*FROM addmember WHERE email='$email' ";
   $result=$ob->select($query);
   $able=mysqli_num_rows($result);
   if($able<=0){
    ?>
    <div class="container">
      <h3 style="font-size: 1.75rem;padding: 93px 20px;text-align: center;color: red;">Please At First Add Some Members To Continue The Whole Process.Thanks <span style="max-width: 20px;max-height: 20px;border-radius: 50%;border: 2px solid #f21515;padding-bottom: 8px;">-_-</span></h3>
    </div>
    <?php } else{ ?>

  <div class="basic">
      <h3 style="text-align:center;text-align: center;
background:#dee3e2b5;;
padding: 12px;
color:black;">  When Add To Bazar Cost Deposit Amount Will be Automatically Added </h3>
     </div>   
<div class="addform" style="display:none" >
  <h4><?php echo"Today Date:". date('d/m/y');?></h4>
  <h3 style="text-align:center;"></h3>
  <form class="formmain" method="post" enctype="multipart/form-data">
 
 

   
  <div class="form-group" >
    <label>Name<span style="color:red;">*</span></label>
    <select name="name" required="" class="custom-select form-control mr-sm-2" id="category">
    <option value="" >Name<span style="color:red;"></span></option>
   <?php  
            $email=Session::get("email");
                $query="SELECT name FROM addmember WHERE email='$email' ";
                    $result=$ob->select($query);
                    
                    if( $result){
                       while($row=$result->fetch_assoc()){
                    


             ?>
     
      <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
      <?php } }?>
  </select>

      
    
  </div>
  <div class="form-group">
    <label>Phone<span style="color:red;">*</span></label>
    <select name="phone" required="" class="custom-select form-control mr-sm-2" id="category">
    <option value=" ">Phone (Must be Careful When Select)</option>
   <?php  
             
                $email=Session::get("email");
                $query="SELECT*FROM addmember WHERE email='$email' ";
                    $result=$ob->select($query);
                    
                    if( $result){
                       while($row=$result->fetch_assoc()){
                    


             ?>
     
      <option value="<?php echo$row['phone']; ?>"><?php echo $row['phone']; ?></option>
      <?php } }?>
  </select>

      
    
  </div>
       <div class="form-group">
    <label for="pwd">Amount</label>
    
  
  <input class="form-control"  name="amount" placeholder="Amount...." required="">

      
    
  </div>
  <div class="form-group">
    <label for="pwd">Date</label>
    
  
  <input class="form-control"  id="comment" name="date1" placeholder=" Date Format Must Be Like this one <?php echo date('d/m/y'); ?>" required="">

      
    
  </div>
   
          
  
      <input type="submit" class="btn btn-info mb-2" style="float: right;margin-top:-6px;padding: 7px 40px;" name="submit" value="Save">          


</form>
  
</div>

<?php }?>
</div>
<div class="container">
  <div class="row addextra" style="margin-bottom:4px">
          <div class="col-md-4">
            <div class="animated slideInLeft yourElement">
            <h4 class="bb" style=" background: #ea721ae6; padding: 80px; color: #f9f9f9;text-align: center;font-size: 30px;"><a href="addmember.php" style="text-decoration:none;color:#f6f1f1"><img class="img1" src="img/add.jpg"> Add Member</a> </h4>
          </div>
          </div>

           <div class="col-md-4">
           <div class="animated flip yourElement1">
            <h4 class="bb" style="background: #67baef;padding: 80px; color: #f9f9f9;text-align: center;font-size: 30px;"><a href="deposit.php" style="text-decoration:none;color:#f6f1f1"><img class="img1" src="img/deposit.png"> Deposit</a></h4>
          </div>
          </div>

           <div class="col-md-4">
            <div class="animated slideInRight yourElement2">
           <h4 class="bb" style="background:#2fb7a4;padding: 84px; color: #f9f9f9;text-align: center;font-size: 25px;"><a href="mcount.php" style="text-decoration:none;color:#f6f1f1"><img class="img1" src="img/daily.jpg">  Daily Meal Count</a></h4>
          </div>
          </div>

  </div>
</div>


<div class="container">
  <h4 style="text-align: center;padding: 20px 10px;background: #a0e7e4">Powered By Dept. Of ICT,MBSTU@2019</h4>
  
</div>
</body>
</html>

