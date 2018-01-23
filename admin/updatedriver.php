<?php
session_start();
include'../dbconnect.php';
$id=$_SESSION['username'];
if($id==''){
	header('transporttype:../index.php');
}
$Id=$_GET['id'];
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

    <title>::Register Driver</title>

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
  </head>

  <body>

    <div class="container">
	<img src="../img/ritco.gif" width="100%">
	  <center><h3 style="color:#fff"></h3></center>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="adminprocess.php">HOME</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
             <!-- <li class="active"><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>-->
             
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="">You are logged in As <span style="color:green"><?php echo $_SESSION['username'];?></span> <span class="sr-only">(current)</span></a></li>
              

  <li class="active"><a href="logout.php">| LOG OUT</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
  <div class="col-md-12" style="color:white" >
      <center><h3 style=""> <STRONG style="color:white;" >Update Driver's Information</strong></h3></center>
	  <?php
$tel=mysql_query("select * from driver where id='$Id'  ",$db);
while($rows=mysql_fetch_array($tel))
{
?>
	  <?php 
		 if(isset($_POST['up'])){
			$servername = "localhost";
$username = "adsrw";
$password = "FHTL#N!XPtiB";
$dbname = "adsrw_kigali";

	

   // Obtains the "remote host", which, on an intranet is the computer's name
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$user = $_POST['plaque'];
	$pass = $_POST['license'];
       



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
	
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("UPDATE driver SET firstname=:firstname,lastname=:lastname,plaque=:user,license=:pass where id='$Id'");
 
   
				       $stmt->bindParam(':firstname', $firstname);
			 		 $stmt->bindParam(':lastname', $lastname);
					 
					   $stmt->bindParam(':user', $user);
					    $stmt->bindParam(':pass', $pass);
						 
	  

       // insert a row
      //$firstname = "John";
     // $lastname = "Doe";
    //$email = "john@example.com";
   
   $stmt->execute();


    

    //echo"<h1 style='background:pink;color:white'>Thank you for voting </h1>";
	echo"<h4 style='color:red'> Driver <span style='color:green'> has been edited </span></h4>";
   
 
   }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }

$conn = null;
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
       <form action="" method="post" >
          <table class="table">
            <tr>
         <td>FirstName
         <input  class=" form-control"type="text" placeholder="Firstname" value="<?php echo $rows['firstname']?>" name="firstname"></td>
         <td>LastName:
           <input  class=" form-control"type="text" placeholder="Lastname" value="<?php echo $rows['lastname']?>" name="lastname"></td></tr>
          <tr>
		  <td>Plaque
         <input  class=" form-control"type="text" placeholder="plaque" value="<?php echo $rows['plaque']?>" name="plaque"></td>
         <td> Driver license Number:
           <input  class=" form-control"type="license" placeholder="license" value="<?php echo $rows['license']?>" name="license"></td></tr>
          <tr>
		  <td> 
		  Transport Agency<select type="text" name="transporttype" class="form-control">
	 <option value="ISCO"> ISCO</option>
	 
	    
	 </select> </td>
               <td><button class="btn btn-lg btn-primary" name="up"> <span class="glyphicon glyphicon-user"> Update now</span></button></center></td></tr>
<!--<tr> <td colspan="2">Description Of sickness <textarea id="RichTextEdit" style="width:100%" cols="50" rows="5" name="sickness"></textarea></td></tr>-->
             <?php
 }
 ?>  
           
</table>
       </form>
	   </div>

<div class="col-md-12" id="felix"><h2> copyright &copy gilberto -<?php $d=date("Y"); echo $d; ?> | Designed by gilberto619</h2></div>

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
