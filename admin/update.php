<?php
session_start();
include'../db.php';
$id=$_SESSION['username'];
if($id==''){
	header('transporttype:../index.php');
}
$Id=$_GET['id'];
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>::OIMS</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../hospital.css" rel="stylesheet">


  </head>

  <body>

    <div class="container">
	<img src="../img/ritco.gif" width="100%">
	 <center><h1 style=""> <STRONG style="color:#fff;" >ONLINE INSURANCE MANAGEMENT SYSTEM</strong></h1></center><hr>
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
            <a class="navbar-brand" href="welcome.php">HOME</a>
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
      <center><h3 style=""> <STRONG style="color:white;" >Update  </strong></h3></center>
	  <?php
$tel=mysql_query("select * from customer where id='$Id'  ",$db);
while($rows=mysql_fetch_array($tel))
{
?>
	  <?php 
		 if(isset($_POST['up'])){
			 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insurance";

	

   
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$usernam= $_POST['username'];
	$telep = $_POST['telephone'];
	$email= $_POST['email'];
       



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
	
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("UPDATE customer SET fname=:fname,lname=:lname,username=:username,telephone=:telephone,email=:email where id='$Id'");
 
   
				     $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
	$stmt->bindParam(':username', $usernam);
	$stmt->bindParam(':telephone', $telep);
	$stmt->bindParam(':email', $email);
						 
	  

       // insert a row
      //$firstname = "John";
     // $lastname = "Doe";
    //$email = "john@example.com";
   
   $stmt->execute();


    

    //echo"<h1 style='background:pink;color:white'>Thank you for voting </h1>";
	echo"<h4 style='color:red'> Custmer Information <span style='color:green'> has been Updated </span></h4>";
   
 
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
         <input  class=" form-control"type="text" placeholder="Firstname" value="<?php echo $rows['fname']?>" name="fname"></td>
         <td>LastName:
           <input  class=" form-control"type="text" placeholder="Lastname" value="<?php echo $rows['lname']?>" name="lname"></td></tr>
          <tr>
		  <td>Username
         <input  class=" form-control"type="text" placeholder="Username" value="<?php echo $rows['username']?>" name="username"></td>
         <td> Telephone
           <input  class=" form-control"type="text" placeholder="Telephone" value="<?php echo $rows['telephone']?>" name="telephone"></td></tr>
          <tr>
		 <td> email
           <input  class=" form-control"type="text" placeholder="email" value="<?php echo $rows['email']?>" name="email"></td>
               <td><button class="btn btn-lg btn-primary" name="up"> <span class="glyphicon glyphicon-user">Update now</span></button></center></td></tr>
<!--<tr> <td colspan="2">Description Of sickness <textarea id="RichTextEdit" style="width:100%" cols="50" rows="5" name="sickness"></textarea></td></tr>-->
             <?php
 }
 ?>  
           
</table>
       </form>
	   </div>

<div class="col-md-12" id="felix"><h2> copyright &copy gilberto <?php $d=date("Y"); echo $d; ?> </h2></div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
