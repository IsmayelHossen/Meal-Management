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

    <?php 


      if(isset($_POST['submit'])){
        
       $text1=$_POST['text1'];
       $text2=$text1;
        $text2=str_replace("'", "\'", $text2);
       if(empty($text1)){
         $msg="PLZ Write Something!";
       }
       else{
        $phone=Session::get("phone");
          $email=Session::get("email");
        $query2="INSERT INTO chat(email,phone,text1,identiy,time1) VALUES('$email','$phone','$text2','member',now())";
        $result2=$ob->insert($query2);
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
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
        <a class="nav-link" href="Search.php"> <i class="fa fa-search"></i>
     Search</a>
      </li>
     
     
     
      
           
      

   
    </ul>
    
  </div>
</nav>


<div class="container">
  <?php 
    if(isset($msg)){
      echo $msg;
    }
  ?>
  <div style="max-width:450px;margin:0 auto;display:block;height:360px;overflow-y:scroll;background:#1ecb51;color: #ddd;">
    <h2 style="text-align:center;"><?php echo Session::get("messname1");?></h2>
    
      <?php
          $phone=Session::get("phone");
          $email=Session::get("email");
          $query="SELECT*FROM chat WHERE email='$email' AND phone='$phone' ORDER BY id DESC";
          $result=$ob->select($query);
          $count=mysqli_num_rows($result);
          if($count>0){
              while($row=$result->fetch_assoc()){
          

       ?>
       <?php 
          if($row['identiy']=='Manager'){
        ?>
       <p style="color: #101111;border: 2px solid #b9c6d4;max-width: 305px;margin-left: 20px;padding: 10px;border-radius: 16%;"><?php echo$row['text1'];?><br><?php $date = $row['time1'];
               echo date('d/m/y  h.i a', strtotime($date));?></p>
       <?php }else{?>
       <p style="color: #ddd;border: 2px solid #305757;max-width: 305px;margin-left: 20px;padding: 10px;border-radius: 16%;"><?php echo$row['text1'];?><br><?php $date = $row['time1'];
               echo date('d/m/y  h.i a', strtotime($date));?></p>
       <?php }?>
       <?php }}else{?>
        <p>Send Message To Mess Manager</p>
        <?php } ?>
    
  </div>
<div style="max-width:450px;margin:0 auto;display:block;background: #0c0c0c;color: #ddd;">

 <form class="" method="post" enctype="multipart/form-data">
 
   
  
   
    
  
  <textarea class="form-control" required="" rows="5" id="comment" name="text1" placeholder=" Write Something & Send Message To Manager.... "></textarea>

      
    </textarea>
  
       
          
    
      <input type="submit" class="btn btn-primary " style="float: right;margin-top: 4px;padding: 7px 22px" name="submit" value="Send">          


</form>

</div>

        
  
</div>









<div class="container-fluid" style="padding-right:0px;padding-left:0px;margin-top: 50px;">
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