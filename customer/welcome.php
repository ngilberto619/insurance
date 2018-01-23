<?php
session_start();
include'../db.php';
$user=$_SESSION['username'];
$tel=mysql_query("select * from customer where username='$user'  order by id limit 1",$db);
while($rows=mysql_fetch_array($tel)){
	$users=$rows['type'];
}


if($users=='admin' or $user==''){
	header('location:../home.php');
	
}
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <title>::Welcome Admin</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
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
	
	<center><h1 style="color:#FFF;">ONLINE INSURANCE MANAGEMENT SYSTEM</h1></center>
	  <center><h3 style="color:#fff"></h3></center>
      <nav class="navbar navbar-default" style="background:#D1222D;color:#fff" >
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="adminprocess.php" style="color:#fff">HOME</a>
          </div>
		  
          <div id="navbar" class="navbar-collapse collapse">
            
            <ul class="nav navbar-nav navbar-right">
              <li ><a href="" style="color:#fff">You are logged in As <span style="color:white"><?php echo $_SESSION['username'];?></span> <span class="sr-only">(current)</span></a></li>
            

  <li ><a href="logout.php" style="color:black">| LOG OUT</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

    <div class="col-md-4">
	  <div class="well well-lg" style="padding-bottom:4px;font-family:'Times New Roman', Times, serif;font-style: normal;font-size:14px;" > 
	<center><h1 style="color:#0C6633;">My Profile</h1></center><hr>

<?php
$tel=mysql_query("select * from customer where username='$user' order by id limit 1",$db);
while($rows=mysql_fetch_array($tel)){
?>
<img src="../img/<?php echo $rows['fileToUpload']?>" width="100%"height="200px">
<?php
}
?>
	
			
            
            
          </div></div>
  <div class="col-md-8" style="padding-right:0px">
  <div class="row">
     <center> 
	 <div class="col-md-3" style="margin-left:40px;background:white;color:#272D73" id="kirii">
     <center><a href="fire.php">  <h4 style="color:#272D73">Fire Insurance</h4> </a></center>
	   </div>
	 <div class="col-md-3" style="margin-left:40px;background:white;color:#272D73" id="kirii">
     <center> <a href="shool.php"> <h4 style="color:#272D73"> Education Insurance</h4> </a></center>
	   </div>
	   
	 <div class="col-md-3" style="margin-left:40px;background:white;color:#272D73" id="kirii">
     <center> <a href="medi.php">  <h4 style="color:#272D73">Moto Insurance</h4></a> </center>
	   </div> </div> 
	    
<hr>


<div class="col-md-12" id="felix"><h5> copyright reserved &copy gilberto <?php $d=date("Y"); echo $d; ?> | gilberto619</h5></div>

    </div> <!-- /container -->


  </body>
</html>
