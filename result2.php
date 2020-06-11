<?php   $msg="";?>
<?php 
     include_once 'database/Session.php';
     
    
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
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
  width: 105px;
  height: 105px;
  border-radius: 50px;
  margin: 0 auto;
  display: block;
  /* padding-top: 10px; */
  margin-top: 10px;
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
  margin-top: 7px;
  outline-offset: 5px;
  outline: 4px solid #e7e6e6;
  border-radius: 6px;
  color: #0B8D8D;
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
.form {
  max-width: 400px;
  display: block;
  margin: 0 auto;
  /* text-align: center; */
  padding:28px 10px;
}
.result3 {
  text-align: center;
padding: 6px 20px;
font-family:'Acme';
}
.result {
  margin-top: 5px;
  background: #efefef;
  padding: 14px 20px;
  box-shadow: 0px 1px 2px 3px #d5d5d5;
}
.result1 {
  background:#ececec;
  margin-top: 6px;
  margin-bottom: 10px;
   box-shadow: 0px 1px 2px 3px #d5d5d5;
}
.result1 h2{
  text-align:center;
  padding:10px 10px;
}
.indexheading {
  text-align: center;
  font-family: 'Acme';
  color: #5d4c4f;
  padding-top: 60px;
}
</style>
</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-dark mx-auto sticky-top " style="background: #F5F5F5;

clear: both;

" >
  <a class="navbar-brand" href="#"><span style="color:#0E52DB">I</span><span style="color:#0FFF00;">C</span><span style="color:red">T</span></a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background:#e15656;color: #f9f9f9;">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item active">
        <a class="nav-link" href="indexhome1.php"><i class="fa fa-home"></i>Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="reg.php"> <i class="fa fa-user"></i>
     Registration</a>
      </li>
      
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <i class="fa fa-th"></i>Result
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         
           <li class="dropdown-submenu"><a class="dropdown-item " href="result2.php">Attendance</a>
           
          </li>
           <li class="dropdown-submenu"><a class="dropdown-item " href="result1.php">Marks</a>
           
          </li>
        </ul>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="#" role="button"><i class='fas fa-envelope' style='font-size:20px'></i>Notification</a>
      </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="far fa-address-book"></i> People
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         
           <li class="dropdown-submenu"><a class="dropdown-item " href="teacher.php">Faculty</a>
           
          </li>
           <li class="dropdown-submenu"><a class="dropdown-item " href="stuff.php">Stuff</a>
           
          </li>
           <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Student List</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="students.php?session=2014-15">2014-15</a></li>
              <li><a class="dropdown-item" href="students.php?session=2015-16">2015-16</a></li>
               <li><a class="dropdown-item" href="students.php?session=2016-17"">2016-17</a></li>
              <li><a class="dropdown-item" href="students.php?session=2017-18"">2017-18</a></li>
              <li><a class="dropdown-item" href="students.php?session=2018-19"">2018-19</a></li>
              
             
            </ul>
          </li>
          
           
        </ul>
      </li>

   
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<?php if(isset($_POST['submit'])){?>
<div class="container result">
<h3 class="search_view" style="argin-top: 8px;text-align: center;padding: 8px 10px;"> Result</h3>
    <div style="max-height:400px;overflow:scroll;">
      <table class="table table-striped">

    <tbody>
    
<?php 
 
 
  $code=$_POST['code'];
   $it=$_POST['it'];
    $query="SELECT*FROM attendance WHERE it='$it' AND code='$code' ";
   $totalclass=$ob->select($query);
   $count=mysqli_num_rows($totalclass);
   echo"<h3 style='text-align:center'>Course Code:ICT-".$code."</h3";
   echo"<br><h4>Total Class-".$count."</h4";


   $query="SELECT*FROM attendance WHERE it='$it' AND code='$code' AND attend='Present' ";
   $resultdetails=$ob->select($query);
   $count1=mysqli_num_rows($resultdetails);
   $absent=$count-$count1;
    echo"<br><h4>Absent -".$absent."</h4";
   if( $count1>0){
    while ($row=$resultdetails->fetch_assoc()) {
      
?>

       <tr>
        <td>Date:<?php echo$row['date1']; ?></td>
        <td>It-<?php echo$row['it']; ?></td>
       <td><?php echo$row['attend']; ?></td>
        </tr> 

 
<?php }?>

</tbody>
</table>
</div>
<div class="progress" style="margin-bottom:10px;">
    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:<?php 
       
         $total1=ceil(($count1/$count)*100);
         echo $total1;

    ?>%">Attendance <?php echo  $total1;?>%
  </div>
 </div>

<?php } else {  ?> 

</div>
<?php }?>
</div>
<?php }?>


 




 

</div>
<div class="container result">
  <h3 class="indexheading">Search </h3>
  <form class="form" action="" method="post">
  <label for="email" class="mr-sm-2">IT</label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="it" name="it"
  placeholder="16054....." required >
  <label for="pwd" class="mr-sm-2">Course Code</label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="pwd" name="code" placeholder="3201......" required="">
  
  <input type="submit" name="submit" class="btn btn-success mb-2" value="Search">
</form> 
</div>
 

<div class="container-fluid" style="padding-right:0px;padding-left:0px;">
    <div class="footer">
  <div class="row">
    <div class="col-sm-12 col-lg-12 ">
      <h3 style="">&copy Right 2019.All Right Reserved by Dept. of ICT</h3>
    </div>
    
      

  
  </div>
</div>
</div>


</body>
</html>