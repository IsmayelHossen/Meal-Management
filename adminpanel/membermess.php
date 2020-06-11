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
                   if(isset($_GET["delete"]))
                   {
                      $email12=$_GET["delete"];

                   
                      $query4="DELETE FROM reg WHERE email='$email12'";
                      $result4=$db->delete($query4);
                    
                     if($result4){
                     $msg3="<div class='alert alert-success'><span>Successfully Deleted!</span></div>";


                  }
                   else{
                   $msg3="<div class='alert alert-danger'><span>Please Try Again!</span></div>";

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
          <h3>Admin Panel Mbstu Admission</h3>
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
             <li> <a href="abnxca.php" style="text-decoration: none;" >Absent & Next Call </a></li>
        
         <li><a href="?action=logout" >Logout</a></li>
        </ul>


    </div>
  </div>
       <div class="col-md-9">
      
            <h3 style="text-align: center;border-bottom: 2px solid #becfe0;padding: 3px 4px;text-shadow: 0px 1px #da4c4c;">All Members List</h3>
           
           <table class="table table-hover" style="margin-top: 34px;">
             <tr>
               <th>No</th>
               <th>Mess Name</th>
               <th>Mess Email</th>
               <th>Password</th>
               <th>Manager</th>
               <th>Confirmation</th>
               <th>Action</th>
             </tr>
             <?php
                 $query="SELECT* FROM reg";
                 $result=$db->select($query);
                  if($result){
                    $i=1;
                    while($row=$result->fetch_assoc()){
                  
              ?>

              <tr>
                <td>
                  <?php echo $i++;?>
                </td>
                <td><?php echo $row['messname']; ?></td>
                 <td><?php echo $row['email']; ?></td>
               <td><?php echo $row['password']; ?></td>
               <td><?php echo $row['mname']; ?></td>
                <td><?php echo $row['active']; ?></td>
               <td> <a class="btn btn-success" onclick="return confirm('Are you want to Block This Mess?')" href="?delete=<?php echo $row['email']; ?>">Delete</a></td>
              </tr>
              <?php }}?>
           </table>
</div>


</body>
</html>


