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


      if(isset($_POST['submit'])){
        $mname=$_POST['mname'];
       $password=$_POST['password'];
      
       
                    $email=Session::get("email");
                    $query2="UPDATE reg SET mname='$mname',password='$password' WHERE email='$email' ";


                    $result2=$ob->update($query2);
                    
                  if($result2){
                    $msg="<div class='alert alert-success'><span>Updated Successfully</span></div>";

                  }
                   else{
                   $msg="<div class='alert alert-danger'><span>Please Try Again!</span></div>";

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
  <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5e9f00b93c7b5a00124be21a&product=inline-share-buttons" async="async"></script>
  

  <link rel="stylesheet" type="text/css" href="css/animate.css">
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
  padding-top: 28px;
  background: #efefef;
  /* color: #f0212166; */
  color: #000;
  padding-bottom: 28px;
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
.yourElement {
  
  animation-delay: 1s;
  
}
.yourElement1 {
  
  animation-delay: 2.5s;
  
}
.yourElement2 {
  
  animation-delay: 3s;
  
}
.yourElement3{
   animation-delay: 4s;
}
.yourElement4{
   animation-delay:5.5s;
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


 <div class="basic"  >
 <h3 style="text-align: center;" class="animated rubberBand bounce">Welcome <?php 
  $email=Session::get("email");
  $query1="SELECT*FROM reg WHERE email='$email' ";
  $result1=$ob->select($query1);
  $row1=$result1->fetch_assoc();
  echo $row1['mname'];

 ?> To

  <?php echo Session::get("messname");?> Mess </h3>
</div>

<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ecf2836a2d5b22c"></script> 

  <div class="row addextra" style="margin-bottom:4px">
          <div class="col-md-4">
            <div class="animated slideInLeft yourElement">
            <h4 class="bb" style=" background:#2cdba3e6; padding: 80px; color: #f9f9f9;text-align: center;font-size: 30px;"><a href="addmember.php" style="text-decoration:none;color:black"><img class="img1" src="img/add.jpg"> Add Member</a> </h4>
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

<div class="container" style=";padding: 20px 10px;background: #a0e7e4;max-width:1120px;">
  <h4 style="text-align: center;" ><p class="animated  bounce yourElement3">Powered By Dept. Of ICT,MBSTU@2019</p></h4>
 <button type="button" class="btn animated flip yourElement4" style="color: #110e0e;background-color: #fcfcfc;border-color: #d4e4e2;" data-toggle="modal" data-target="#myModal">
  Update
</button>
  <div class="modal" id="myModal">
  <div class="modal-dialog" style="background: #eff0f0;">
    <div class="modal-content">

    

      <!-- Modal body -->
      <div class="modal-body">

          <div class="container " >
    <div >

        <h3 class="form3">Update Manager Information</h3>
  <form action=" " method="post">
     <?php 
  if(isset($msg)){
     echo $msg;
  }
    ?>
    <?php 
  $email=Session::get("email");
  $query1="SELECT*FROM reg WHERE email='$email' ";
  $result1=$ob->select($query1);
  $row1=$result1->fetch_assoc();

 ?>
  <div class="form-group">
    <label for="email" class="text-center">Manager Name</label>
   
    <input type="text" class="form-control" id="email" name="mname" value="<?php echo $row1['mname'];?>" >
  </div>
  <div class="form-group">
    <label for="pwd">Change Password</label>
    <input type="text" class="form-control" id="password" name="password" value="<?php echo $row1['password'];?>" >
  </div>
 
   <div class="form-group">

  <input class="btn btn-success" type="submit" name="submit" value="Update">
</div>
</form>
</div>

</div>


      
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>

  
  
  
  
  <h5 style="margin-top: -9px;text-align: right;padding: 10px;" >
   <p class="animated  rubberBand yourElement3"><a href="help.php" style="text-decoration:none;"> Help Line</a></p>
  </h5>
</div>
<div class="sharethis-sticky-share-buttons"></div>


              <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
    <a class="a2a_button_facebook"></a>
    <a class="a2a_button_twitter"></a>
     
    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
</div>

<script>
var a2a_config = a2a_config || {};
a2a_config.linkname = 'Meal-Management';
a2a_config.linkurl = 'https://meal-management.000webhostapp.com/home.php';
</script>

<script async src="https://static.addtoany.com/menu/page.js"></script>

</body>
</html>

