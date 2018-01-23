<?php
session_start();
include'../db.php';
$user=$_SESSION['username'];
if($user==''){
	header('location:../index.php');
}
 ?>


<html lang="en">
  <head>

    <title>::Welcome Admin</title>
	        <link rel="stylesheet" type="text/css" href="css/default.css"/>


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
	
	<center><h2 style="color:#FFF;">ONLINE INSURANCE MANAGEMENT SYSTEM</h2></center>
	  <center><h3 style="color:#fff"></h3></center>
      <nav class="navbar navbar-default" style="background:#D1222D;color:#fff" >
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="welcome.php" style="color:#fff">HOME</a>
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
	<center><h2 style="color:#0C6633;">My Profile</h2></center><hr>

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
	 
	 
	 	     <?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insurance";
	


if(isset($_POST['send']))
{
	$d=strtotime("today");
	date_default_timezone_set("Africa/Kigali");
$kir=date("y-m-d H:i:s");
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$telephone=$_POST['telephone'];
	$email=$_POST['email'];
	$cname = $_POST['cname'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$insurance = $_POST['insurance'];
	
    $period=$_POST['period'];

	
	

if($cname =='' or $dob==''  or $gender=='' or $insurance=='' or $period==''){
	echo" <span style='color:red'>sorry! Complete all Fields</span>";
}
	
else
	
if($insurance=='Primary School'  and $period=='semi'){
	$amount = 200000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO school( fname,lname,telephone,email,cname,dob,gender,insurance, period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:cname,:dob,:gender,:insurance,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':cname', $cname);
    $stmt->bindParam(':dob', $dob);
	$stmt->bindParam(':gender', $gender);
	$stmt->bindParam(':insurance',$insurance);
         $stmt->bindParam(':period', $period);
			  $stmt->bindParam(':amount', $amount);  
			
			  $stmt->bindParam(':user', $user);  



       // insert a row
      //$sendernames = "John";
     // $source = "Doe";
    //$email = "john@example.com";

   $stmt->execute();


echo"<h2 style='clor:green'> Thank you, for requesting this services</h2>";


	
    }
catch(PDOException $e)
   {
   echo "Error: " . $e->getMessage();
   }

$conn = null;
}

else
if($insurance=='Primary School'  and $period=='annually'){
	$amount = 400000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO school( fname,lname,telephone,email,cname,dob,gender,insurance, period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:cname,:dob,:gender,:insurance,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':cname', $cname);
    $stmt->bindParam(':dob', $dob);
	$stmt->bindParam(':gender', $gender);
	$stmt->bindParam(':insurance',$insurance);
         $stmt->bindParam(':period', $period);
			  $stmt->bindParam(':amount', $amount);  
			
			  $stmt->bindParam(':user', $user);  



       // insert a row
      //$sendernames = "John";
     // $source = "Doe";
    //$email = "john@example.com";

   $stmt->execute();


echo"<h2 style='clor:green'> Thank you, for requesting this services</h2>";


	
    }
catch(PDOException $e)
   {
   echo "Error: " . $e->getMessage();
   }

$conn = null;
}
else
if($insurance=='Secondary School'  and $period=='semi'){
	$amount = 300000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO school( fname,lname,telephone,email,cname,dob,gender,insurance, period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:cname,:dob,:gender,:insurance,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':cname', $cname);
    $stmt->bindParam(':dob', $dob);
	$stmt->bindParam(':gender', $gender);
	$stmt->bindParam(':insurance',$insurance);
         $stmt->bindParam(':period', $period);
			  $stmt->bindParam(':amount', $amount);  
			
			  $stmt->bindParam(':user', $user);  



       // insert a row
      //$sendernames = "John";
     // $source = "Doe";
    //$email = "john@example.com";

   $stmt->execute();


echo"<h2 style='clor:green'> Thank you, for requesting this services</h2>";


	
    }
catch(PDOException $e)
   {
   echo "Error: " . $e->getMessage();
   }

$conn = null;
}
else
if($insurance=='Secondary School'  and $period=='annually'){
	$amount = 600000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO school( fname,lname,telephone,email,cname,dob,gender,insurance, period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:cname,:dob,:gender,:insurance,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':cname', $cname);
    $stmt->bindParam(':dob', $dob);
	$stmt->bindParam(':gender', $gender);
	$stmt->bindParam(':insurance',$insurance);
         $stmt->bindParam(':period', $period);
			  $stmt->bindParam(':amount', $amount);  
			
			  $stmt->bindParam(':user', $user);  



       // insert a row
      //$sendernames = "John";
     // $source = "Doe";
    //$email = "john@example.com";

   $stmt->execute();


echo"<h2 style='clor:green'> Thank you, for requesting this services</h2>";


	
    }
catch(PDOException $e)
   {
   echo "Error: " . $e->getMessage();
   }

$conn = null;
}
else
if($insurance=='University'  and $period=='semi'){
	$amount = 400000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO school( fname,lname,telephone,email,cname,dob,gender,insurance, period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:cname,:dob,:gender,:insurance,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':cname', $cname);
    $stmt->bindParam(':dob', $dob);
	$stmt->bindParam(':gender', $gender);
	$stmt->bindParam(':insurance',$insurance);
         $stmt->bindParam(':period', $period);
			  $stmt->bindParam(':amount', $amount);  
			
			  $stmt->bindParam(':user', $user);  



       // insert a row
      //$sendernames = "John";
     // $source = "Doe";
    //$email = "john@example.com";

   $stmt->execute();


echo"<h2 style='clor:green'> Thank you, for requesting this services</h2>";


	
    }
catch(PDOException $e)
   {
   echo "Error: " . $e->getMessage();
   }

$conn = null;
}
else
if($insurance=='University'  and $period=='annually'){
	$amount = 1000000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO school( fname,lname,telephone,email,cname,dob,gender,insurance, period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:cname,:dob,:gender,:insurance,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':cname', $cname);
    $stmt->bindParam(':dob', $dob);
	$stmt->bindParam(':gender', $gender);
	$stmt->bindParam(':insurance',$insurance);
         $stmt->bindParam(':period', $period);
			  $stmt->bindParam(':amount', $amount);  
			
			  $stmt->bindParam(':user', $user);  



       // insert a row
      //$sendernames = "John";
     // $source = "Doe";
    //$email = "john@example.com";

   $stmt->execute();


echo"<h2 style='clor:green'> Thank you, for requesting this services</h2>";


	
    }
catch(PDOException $e)
   {
   echo "Error: " . $e->getMessage();
   }

$conn = null;
}







}

?>
	 
	 <?php 
	 $apace=mysql_query("select * from customer  where username='$user'  limit 1",$db);
	 while($rows=mysql_fetch_array($apace)){
	 ?>
	 
        <form action="" class="register" method="POST">
            <fieldset class="row1">
                <legend>Customer Information
                </legend>
                <p>
                    <label>First name
                    </label>
                    <input type="text" name="fname" value="<?php echo $rows['fname']; ?>"/>
                    <label>Last name
                    </label>
                    <input type="text" name="lname" value="<?php echo $rows['lname']; ?>"/>
                </p>
                <p>
                    <label>Telephone*
                    </label>
                    <input type="text" name="telephone" value="<?php echo $rows['telephone']; ?>"/>
                    <label>email
                    </label>
                    <input type="text" name="email" value="<?php echo $rows['email']; ?>"/>
                    
                </p>
            </fieldset>
            <fieldset class="row2">
                <legend>Children's Information
                </legend>
				
				
                <p>
                    <label>Names *
                    </label>
                    <input type="text" class="long" name="cname"/>
                </p>
                <p>
                    <label class="optional">Date of Birth *
                    </label>
                    <input type="text" class="long" name="dob"/>
                </p>
				                <p>
                    <label>Gender *
                    </label>
                    <select name="gender">
                        <option>
                        </option>
					    <option value="male" >Male
                        </option>
                        <option value="female" >Female
                        </option>
						
                    </select>
                </p>
				
				                <p>
                    <label>Insurance for
					
								
					
                    </label>
					
					                    <select name="insurance">
                        <option>
                        </option>
					    <option value="Primary School" >Primary School
                        </option>
                        <option value="Secondary school" >Secondary school
                        </option>
						<option value="University">University
                        </option>





                    </select>

                </p>


            </fieldset>
            <fieldset class="row3">
                <legend>Further Information
                </legend>
                <p>
                    <label>Period  *</label>
  <input type="radio" name="period" value="semi" > semi-annually(6 Months)<br>
  <input type="radio" name="period" value="annually"> annually(year)<br>
               </p>
			                   <p>
                    <label>Amount:<br/> <?php 
	 $apace=mysql_query("select * from school  where users='$user'  limit 1",$db);
	 while($rows=mysql_fetch_array($apace)){
		 echo $rows['amount'];
	 }
	 ?>
                    </label>
                   
                </p>

            </fieldset>
            <div><button class="button" name="send">Send &raquo;</button></div>
			            <div><a href="reports.php?users=<?php echo $_SESSION['username'];?>" class="button" >Print Slip &raquo;</a></button></div>

        </form>
	 
	 <?php 
	 
	 }
	 ?>
	 
	 
	 </div> 
	    
<hr>


<div class="col-md-12" id="felix"><h5> copyright reserved &copy gilberto <?php $d=date("Y"); echo $d; ?> | gilberto619</h5></div>

    </div>
	</div <!-- /container -->


  </body>
</html>
