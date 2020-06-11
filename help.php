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
         
       $text1=$_POST['text1'];
       if(empty($text1)){
         $msg="PLZ Write Something!";
       }
       else{
         $text2=$text1;
          $text2=str_replace("'", "\'", $text2);
          $email=Session::get("email");
          $date=date('y/m/d');
          
        $query2="INSERT INTO chat1(email,text1,identiy,time1) VALUES('$email','$text2','user',now())";
        $result2=$ob->insert($query2);
      }
    }
?>
    
    


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/stylem.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
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
.table td, .table th {
  padding: 6px;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
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
<h3 style="text-shadow: 0px 1px 2px #f9dbc1;">For any kind of help please contact us</h3>
<div class="row">
  <div class="col-md-6">
    <h4>Social & Sell Phone</h4>
    <table class="table table-hover">
      <tr>
        <th rowspan="4">Phone</th>
        <td><a style="color:black" href="https://www.facebook.com/ismayel.hossen.77">Ismayel Hossen</a>:01952152883</td>
      </tr>
       <tr>
         <td>
          <a style="color:black" href="https://www.facebook.com/raj.shikder.71">Abdullah Al Mamun</a>
         :01626311400</td>
      </tr>
        <tr>
         <td><a style="color:black" href="https://www.facebook.com/wazidullah.murad">Wazid Ullah Murad</a>:01685222158   </td>
      </tr>
      <tr>
         <td><a style="color:black" href="https://www.facebook.com/khaledhasan.manna">Khaled Hasan Manna</a>:01755260752</td>
      </tr>
       
      <tr>
        <th>Email</th>
        <td>ismayelhossen123@gmail.com</td>
      </tr>
      <tr>
        <th>Facebook</th>
        <td><a href="https://www.facebook.com/ismayel.hossen.77">Facebook</a></td>
      </tr>
      <tr>
        <th> Address</th>
        <td>
          Santosh, Tangail-1902, Bangladesh
        </td>
      </tr>
    </table>
  </div>
 <div class="col-md-6">
<h4>Send Message</h4>
<div style="max-width:450px;margin:0 auto;display:block;height:300px;overflow-y:scroll;background: #010202;color: #ddd;">
    <h2 style="text-align:center;"><?php echo Session::get("messname1");?></h2>
   
    
      <?php
      
          $email=Session::get("email");
          $query="SELECT*FROM chat1 WHERE email='$email' ORDER BY id DESC";
          $result=$ob->select($query);
          $count=mysqli_num_rows($result);
          if($count>0){
              while($row=$result->fetch_assoc()){
          

       ?>
       <?php 
          if($row['identiy']=='user'){
        ?>
       <p style="color:red;border: 2px solid #b9c6d4;max-width: 305px;margin-left: 20px;padding: 10px;border-radius: 16%;"><?php echo$row['text1'];?><br><?php $date = $row['time1'];
               echo date('d/m/y  h.i a', strtotime($date));?></p>
       <?php }else{?>
       <p style="color: #ddd;border: 2px solid #305757;max-width: 305px;margin-left: 20px;padding: 10px;border-radius: 16%;"><?php echo$row['text1'];?><br><?php $date = $row['time1'];
               echo date('d/m/y  h.i a', strtotime($date));?></p>
       <?php }?>
       <?php }}else{?>
        <p>Send Message To The Authority</p>
        <?php } ?>
    
  </div>
<div style="max-width:450px;margin:0 auto;display:block;background: #0c0c0c;color: #ddd;">

 <form class="" method="post" enctype="multipart/form-data">
 
   
  
   
    
  
  <textarea class="form-control" required="" rows="5" id="comment" name="text1" placeholder=" Any Kind Of Query You Can Ask Us If Possible We Try Our Best To Give You Feedback.Thanks "></textarea>

      
    </textarea>
  
       
          
    
      <input type="submit" class="btn btn-success " style="float: right;margin-top: 4px;padding: 7px 22px" name="submit" value="Send">          


</form>

</div>

 </div>

  </div>

</div>
</div>

<div class="container" style=";padding: 20px 10px;background: #a0e7e4;max-width:1120px;">
  <h4 style="text-align: center;" ><p class="animated  bounce yourElement3">Powered By Dept. Of ICT,MBSTU@2019</p></h4>
 </div>

   

</body>
</html>

