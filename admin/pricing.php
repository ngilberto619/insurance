<?php
include'../db.php';
session_start();
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

    <title>BIMS|Register the branch</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../hospital.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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

  <body style="background-color:#FDCC26">

    <div class="container">
	<center><h1 style="color:#D1222D;">INVENTORY MANAGEMENT SYSTEM</h1></center>
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
           <div class="dropdown">
  <button class="dropbtn" style="background-color:#D1222D">Items</button>
  <div class="dropdown-content">
    <a href="panache.php">Panache</a>
    <a href="skollager.php">Skol Lager</a>
    <a href="skol.php">Skol</a>
  </div></div>  
            <ul class="nav navbar-nav navbar-right">
              <li ><a href="" style="color:#fff">You are logged in As <span style="color:white"><?php echo $_SESSION['username'];?></span> <span class="sr-only">(current)</span></a></li>
            

  <li ><a href="logout.php" style="color:black">| LOG OUT</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
  <div class="col-md-12" style="color:#0C6633" >
     <div class="col-md-6">  <center><h3 style=""> <STRONG style="color:#0C6633;" >ADD Pricing</strong></h3></center><hr>
	   <?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insurance";


if(isset($_POST['ohereza']))
{
	$d=strtotime("today");
	date_default_timezone_set("Africa/Kigali");
$kir=date("y-m-d H:i:s");
	$products = $_POST['products'];
	$price = $_POST['price'];
	 if(  $products=='' or $price==''){
echo"<h1 style='color:red'> Complete all fields</h1>";	
}


else{
	



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO pricing ( products, price,time)
    VALUES (:products, :price,:kir)");


    $stmt->bindParam(':products', $products);
    $stmt->bindParam(':price', $price);
	
				 $stmt->bindParam(':kir', $kir);
				  
   $stmt->execute();


       echo"<h1 style='color:green'>Price is added <img src='../img/ok.png' width='20px'></h1>";
    }
catch(PDOException $e)
   {
   echo "Error: " . $e->getMessage();
   }

$conn = null;

}

}

?>

           <script type="text/javascript" src="../nicEdit.js"></script>
<script type="text/javascript">
 bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
  <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>

 <script type="text/javascript">
//<![CDATA[
       bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
 //]]>
 </script>
        <form action="" method="post" enctype="multipart/form-data" >
          <table class="table">
            <tr>
         <td>		   Products<select type="text" name="products" class="form-control">
	 <option value=""> Choose the Products</option>
	 <option value="panache">Panache</option>
	  <option value="skollager">Skol Lager 50 CL</option>
	   <option value="gatanu"> Gatanu 65 CL</option>
	    <option value="malt33"> Malt 33 CL</option>
		 <option value="malt65"> Malt 65 CL</option>
		  <option value="virunga">Virunga Mist</option>
	
	 </select></td>
         <td>Price per Outlet
           <input  class=" form-control"type="text" placeholder="enter Price" name="price"></td></tr>
       
         
			
			   <tr><td><button class="btn btn-lg btn-primary" name="ohereza"> <span class="glyphicon glyphicon-user"> Add Price</span></button></center></td></tr>
<!--<tr> <td colspan="2">Description Of sickness <textarea id="RichTextEdit" style="width:100%" cols="50" rows="5" name="sickness"></textarea></td></tr>-->
              
           
</table>
       </form></div><div class="col-md-6" >PRICING LIST
	   <TABLE class="table">
	   <tr><td>Products</td><td>Price/outlet</td><td>Update</td></tr>
	   <?php
	   $tel=mysql_query("select * from pricing ",$db);
	   while($rows=mysql_fetch_array($tel)){
	   ?>
	   <tr><td><?php echo $rows['products'] ?></td><td><?php echo $rows['price'] ?></td><td><a href="updateprice.php?id=<?php echo $rows['id'] ?>">Update</a></td></tr>
	   <?php
	   }
	   ?>
	   </table>
	   </div>
	   </div>

<div class="col-md-12" id="felix"><h2> copyright &copy gilberto-<?php $d=date("Y"); echo $d; ?> | Designed by gilberto619</h2></div>

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
