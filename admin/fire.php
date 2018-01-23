<?php
session_start();
include'../db.php';
$user=$_SESSION['username'];
if($user==''){
	header('location:../index.php');
}
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>OIMS</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../hospital.css" rel="stylesheet">

 
	<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
  </head>

  <body style="background-color:#3A9DCA">

    <div class="container">
<center><h1 style="color:white;">ONLINE INSURANCE MANAGEMENT SYSTEM</h1></center>
	  <center><h3 style="color:#fff"></h3></center>
	<p style="text-align:right;color:#fff">You are logged in As <span style="color:red"><?php echo $_SESSION['username'];?></span></p>
	 
      <nav class="navbar navbar-default" style="background:#D1222D;color:#fff" >
        <div class="container-fluid">
          <div class="navbar-header">
        
            <a class="navbar-brand" href="welcome.php" style="color:#fff">HOME</a>
          </div>
		  
          <div id="navbar" class="navbar-collapse collapse">
    
            <ul class="nav navbar-nav navbar-right">
             
            

  <li ><a href="logout.php" style="color:black">| LOG OUT</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>


      <!-- Main component for a primary marketing message or call to action -->
  <div class="col-md-12" style="color:white" >
      <center><h3 style=""> <STRONG style="color:white;" >List of fire INSURANCE</strong></h3></center><hr>
	 
<div class="col-md-12">
	 <table class="table"> <tr style="background:#fff;color:#272D73;font-size:16px"><td>Firstname</td><td>Lastname</td><td>Email</td><td>Telephone</td><td>Owner of Building</td><td>Building Usage</td><td>Size of Building</td><td>Location of Building</td><td>Property number</td><td>Material Used</td><td>Period of insurance</td><td>amount</td><td>Delete</td></tr>
	 <?php 
	 $ange=mysql_query("select * from fire   order by id desc limit 2000",$db);
	 while($rows=mysql_fetch_array($ange)){
	 ?>
	 <tr style="background:#0C6633;"><td><p style="font-size:16px;color:white"><?php echo $rows['fname'] ?></p></td><td><p style="font-size:16px;color:white"><?php echo $rows['lname'] ?></p></td><td><p style="font-size:16px;color:white"><?php echo $rows['email'] ?></p></td><td><p style="font-size:16px;color:white"><?php echo $rows['telephone'] ?></p></td><td><p style="font-size:16px;color:white"><?php echo $rows['owne'] ?></p></td><td><p style="font-size:16px;color:white"><?php echo $rows['used'] ?></p></td><td><p style="font-size:16px;color:white"><?php echo $rows['size'] ?></p></td><td><p style="font-size:16px;color:white"><?php echo $rows['location'] ?></p></td><td><p style="font-size:16px;color:white"><?php echo $rows['property'] ?></p></td><td><p style="font-size:16px;color:white"><?php echo $rows['period'] ?></p></td><td><p style="font-size:16px;color:white"><?php echo $rows['material'] ?></p></td><td><p style="font-size:16px;color:white"><?php echo $rows['amount'] ?></p></td><td><a href="deletef.php?id=<?php echo $rows['id']?> "><img src="../img/delete.png" width="50%"></td></tr>
	 <?php 
	 }
	 ?>
	 </table>
	  </div>

<div class="col-md-12" id="felix"><h3> copyright &copy Gilberto | @ <?php $d=date("Y"); echo $d; ?> </h3></div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
