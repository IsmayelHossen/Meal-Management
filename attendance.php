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

   $attend=$_POST['attend'];
    $code=$_POST['code'];
    Session::set("code",$code);
    $query="SELECT*from attendance WHERE date1='$date' AND code='$code' AND email='$email' ";
    $outattendance=$ob->select($query);
    $row=$outattendance->fetch_assoc();
   
    
          
           if($date==$row['date1']  ){
            
             $msg="<div style='text-align:center;margin-top:5px;' class='alert alert-danger alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>Attendance Already Taken
  </div>";
            


           }
           else{
      
    
          $session=Session::get("ses");
        
        
    
      
       foreach ($attend as $key1 => $value) {
        if($value=="Present")
        {
          $query="INSERT INTO attendance(email,it,attend,date1,code,session1) VALUES('$email','$key1','Present','$date','$code','$session')";
          $result=$ob->insert($query);
          
        }

        elseif($value=="Absent")
        {
            $query="INSERT INTO attendance(email,it,attend,date1,code,session1) VALUES('$email','$key1','Absent','$date','$code','$session')";
          $result=$ob->insert($query);
          
        }



       
       }

        if($result){
          $msg="<div style='text-align:center;margin-top:5px;' class='alert alert-success alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>Present Taken Successfully
  </div>";
            
              
                   
          }
          else{
             $msg="<div style='text-align:center;margin-top:5px;' class='alert alert-danger alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>Please Try Again
  </div>";
               
                    
          }


   
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
        width:90px;
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
  width: 60px;
  height: 60px;
  border-radius: 50%;
  margin: 0 auto;
  /* display: block; */
  /* padding-top: 10px; */
  
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
  padding-top: 8px;
  background: #f3f2f2;
  /* color: #f0212166; */
  color: #000;
  padding-bottom: 16px;
  box-shadow: 0px 2px 3px #c9ced4;
}
.extra {
  background: #f2f2f2;
  margin-top: 8px;
  box-shadow: 0px 2px 3px #a4a4a4;
  padding-top: 10px;
  padding-bottom: 10px;
}
.table td {
  padding: 3px;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}
</style>

<script type="text/javascript">
   $(document).ready(function(){
    $("form").submit(function(){
    var roll=true;
    $(":radio").each(function(){
        name=$(this).attr('name');
        if(roll && !$(':radio[name="' +name + '"]:checked').length){
        alert(name+"  Roll Missing");
        roll=false;
        }
    });
    return roll;
   });
   }) ;

</script>




</head>
<body>
 <?php  if(isset($_GET['action']) && $_GET['action']=='logout')
                               Session::destroy();

                        ?>
                       
<nav class="navbar navbar-expand-md  navbar-dark mx-auto sticky-top " style="background: #F5F5F5;clear: both;" >
  <a class="navbar-brand" href="#"><span style="color:#0E52DB">I</span><span style="color:#0FFF00;">C</span><span style="color:red">T</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="background:#e15656;color: #f9f9f9;">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNavDropdown">
    <ul class="navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="post.php">Post</a>
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="result.php">Result </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          B.Sc
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         
           <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">1st Year</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="attendance.php?session=2018-19">1-1</a></li>
              <li><a class="dropdown-item" href="#">1-2</a></li>
             
            </ul>
          </li>
           <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">2nd Year</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="attendance.php?session=2017-18">2-1</a></li>
              <li><a class="dropdown-item" href="attendance.php?session=2016-17">2-2</a></li>
             
            </ul>
          </li>
           <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">3rd Year</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">3-1</a></li>
              <li><a class="dropdown-item" href="attendance.php?session=2015-16">3-2</a></li>
             
            </ul>
          </li>
           <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">4th Year</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="attendance.php?session=2014-15">4-1</a></li>
              <li><a class="dropdown-item" href="#">4-2</a></li>
             
            </ul>
          </li>
        </ul>
      </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          M.Sc
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         
           <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">1st Year</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="a.php">1-1</a></li>
              <li><a class="dropdown-item" href="b.php">1-2</a></li>
             
            </ul>
          </li>
           <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">2nd Year</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">2-1</a></li>
              <li><a class="dropdown-item" href="#">2-2</a></li>
             
            </ul>
          </li>
           <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">3rd Year</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">3-1</a></li>
              <li><a class="dropdown-item" href="#">3-2</a></li>
             
            </ul>
          </li>
           <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">4th Year</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">4-1</a></li>
              <li><a class="dropdown-item" href="#">4-2</a></li>
             
            </ul>
          </li>
        </ul>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="schedule.php">Schedule <span class="sr-only">(current)</span></a>
      </li>
      
       <li class="nav-item ">
        <a class="nav-link" href="?action=logout">Logout <span class="sr-only">(current)</span></a>
      </li>




    </ul>
  </div>
   <form class="form-inline" action="">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit" style="margin-top: 5px;">Search</button>
  </form>
  
</nav>

<div class="container-fluid slideanim" >
  <div class="jumbotron slide " style="margin-bottom: 2px;" >
  <h1 style="text-align:center;font-family:'Acme';color:#007a7e;">Attendance Sheet</h1>
    <?php 
        error_reporting(0);

        if(isset($_GET['session'])){
            $session=$_GET['session'];
             Session::set("ses",$session);
            if($session=='2015-16'){
                $lavel="<h4 style='text-align:center;color:#007a7e;'>3rd Year 2nd Semester</h4>";
                Session::set('level', $lavel);
                echo $lavel;
            }

            elseif($session=='2014-15'){
                $lavel="<h4 style='text-align:center;color:#007a7e;'>4th Year 1st Semester</h4>";
                Session::set('level', $lavel);
                echo $lavel;
            }
             elseif($session=='2016-17'){
                $lavel="<h4 style='text-align:center;color:#007a7e;'>2nd Year 2nd Semester</h4>";
                Session::set('level', $lavel);
                echo $lavel;
            }
            elseif($session=='2017-18'){
                $lavel="<h4 style='text-align:center;color:#007a7e;'>2nd Year 1st Semester</h4>";
                Session::set('level', $lavel);
                echo $lavel;
            }
            elseif($session=='2018-19'){
                $lavel="<h4 style='text-align:center;color:#007a7e;'>1st Year 1st Semester</h4>";
                Session::set('level', $lavel);
                echo $lavel;
            }
            else{
            Session::set("ses",$session);
          }
         
           
          
              
          }
          ?>
          <h4 class="slide" style="text-align:center;font-family:'Acme';color:#007a7e;">Session:<?php echo $session;?></h4>
       

  </div>
     
</div>
<div class="container" style="box-shadow: 0px 2px 3px 4px #d1d1d1;background:#ECECEC;margin-top: 6px;">
<h3 style="padding:40px 10px;text-align: center;"><b>Date:</b> <?php 
$dateTime = new DateTime('now', new DateTimeZone('Asia/Dhaka')); 
$time= $dateTime->format("d/m/y  h:i A"); 
 echo $time;
?></h3>
<?php 
if(isset($_POST['submit'])){

   $attend=$_POST['attend'];
    $code=$_POST['code'];

?>
<a href="view.php" class="btn btn-success view">View</a>
<?php }?>
</div>
<div class="container" style="box-shadow: 0px 2px 3px 4px #d1d1d1;background: #ededed;margin-top: 10px;">
  <div class="row">

    <div class="col-lg-12">
       
    <?php 

   if(isset( $msg)){
      echo $msg;
   }?>
 
         <form action="" method="post">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>IT</th>
        <th>name</th>
        <th>Image</th>
        <th>Attendanc</th>
       
        
      </tr>
    </thead>
    <tbody>
   <?php 
        error_reporting(0);

        if(isset($_GET['session'])){
            $session=$_GET['session'];

          }
         
          
   $query="SELECT*FROM students WHERE session='$session' ";
   $result=$ob->select($query);
   if($result){

       while($row=$result->fetch_assoc()){

          ?>
          <tr>
            <td><?php echo$row['it']; ?></td>
             <td><?php echo$row['name']; ?></td>
             <td><img src="img/<?php echo$row['img']; ?>"> </td>
               <td>
                      <input type="radio" name="attend[<?php echo$row['it'];?>]" value="Present">P
                      <input type="radio" name="attend[<?php echo$row['it'];?>]" value="Absent">A

                    </td>
          </tr>
          <?php }}?>
         
        </tbody>
      </table>
      <div class="form">
  <label>Course Code</label>
  <input type="text" name="code" class="form-control" placeholder="Course Code.." required>
      </div>
       <input type="submit" name="submit" value="submit " class="btn btn-success" style="float:right;margin-bottom:10px;margin-top: 10px;
}"> 
    </form>

</div>
</div>
</div>  
</body>
</html>

