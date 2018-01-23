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
	$type = $_POST['type'];
	$used = $_POST['used'];
	$mark = $_POST['mark'];
	$chassis = $_POST['chassis'];
	
	$plate = $_POST['plate'];
	$year=$_POST['year'];
    $period=$_POST['period'];
	
	

if($type =='' or $used==''  or $mark=='' or $chassis=='' or $plate=='' or $year=='' or $period==''){
	echo" <span style='color:red'>sorry! Complete all Fields</span>";
}
	
else{
	
if($type=='small' and $used=='Driving school' and $period=='semi'){
	$amount = 100000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO moto ( fname,lname,telephone,email,type, used,mark,chassis,plate, year,period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:type, :used,:mark,:chassis,:plate,:year,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':used', $used);
	$stmt->bindParam(':mark', $mark);
	$stmt->bindParam(':chassis', $chassis);
    $stmt->bindParam(':plate', $plate);
    $stmt->bindParam(':year', $year);
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
}else if($type=='small' and $used=='Walk and affairs' and $period=='semi'){
	$amount = 50000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO moto ( fname,lname,telephone,email,type, used,mark,chassis,plate, year,period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:type, :used,:mark,:chassis,:plate,:year,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':used', $used);
	$stmt->bindParam(':mark', $mark);
	$stmt->bindParam(':chassis', $chassis);
    $stmt->bindParam(':plate', $plate);
    $stmt->bindParam(':year', $year);
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
	if($type=='small' and $used=='Transport of goods or Persons' and $period=='semi'){
	$amount = 150000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO moto ( fname,lname,telephone,email,type, used,mark,chassis,plate, year,period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:type, :used,:mark,:chassis,:plate,:year,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':used', $used);
	$stmt->bindParam(':mark', $mark);
	$stmt->bindParam(':chassis', $chassis);
    $stmt->bindParam(':plate', $plate);
    $stmt->bindParam(':year', $year);
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
else 	if($type=='small' and $used=='Transport of goods or Persons' and $period=='annually'){
	$amount = 300000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO moto ( fname,lname,telephone,email,type, used,mark,chassis,plate, year,period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:type, :used,:mark,:chassis,:plate,:year,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':used', $used);
	$stmt->bindParam(':mark', $mark);
	$stmt->bindParam(':chassis', $chassis);
    $stmt->bindParam(':plate', $plate);
    $stmt->bindParam(':year', $year);
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
} else
	if($type=='small' and $used=='Transport of goods or Persons' and $period=='annually'){
	$amount = 100000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO moto ( fname,lname,telephone,email,type, used,mark,chassis,plate, year,period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:type, :used,:mark,:chassis,:plate,:year,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':used', $used);
	$stmt->bindParam(':mark', $mark);
	$stmt->bindParam(':chassis', $chassis);
    $stmt->bindParam(':plate', $plate);
    $stmt->bindParam(':year', $year);
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


else if($type=='small' and $used=="Driving school" and $period=='annually'){
	$amount = 200000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO moto ( fname,lname,telephone,email,type, used,mark,chassis,plate, year,period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:type, :used,:mark,:chassis,:plate,:year,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':used', $used);
	$stmt->bindParam(':mark', $mark);
	$stmt->bindParam(':chassis', $chassis);
    $stmt->bindParam(':plate', $plate);
    $stmt->bindParam(':year', $year);
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

else 	if($type=='motocycle' and $used=='Transport of goods or Persons' and $period=='semi'){
	$amount = 75000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO moto ( fname,lname,telephone,email,type, used,mark,chassis,plate, year,period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:type, :used,:mark,:chassis,:plate,:year,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':used', $used);
	$stmt->bindParam(':mark', $mark);
	$stmt->bindParam(':chassis', $chassis);
    $stmt->bindParam(':plate', $plate);
    $stmt->bindParam(':year', $year);
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
else 	if($type=='motocycle' and $used=='Transport of goods or Persons' and $period=='annually'){
	$amount = 150000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO moto ( fname,lname,telephone,email,type, used,mark,chassis,plate, year,period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:type, :used,:mark,:chassis,:plate,:year,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':used', $used);
	$stmt->bindParam(':mark', $mark);
	$stmt->bindParam(':chassis', $chassis);
    $stmt->bindParam(':plate', $plate);
    $stmt->bindParam(':year', $year);
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
else 	if($type=='motocycle' and $used=='Walk and affairs' and $period=='semi'){
	$amount = 35000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO moto ( fname,lname,telephone,email,type, used,mark,chassis,plate, year,period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:type, :used,:mark,:chassis,:plate,:year,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':used', $used);
	$stmt->bindParam(':mark', $mark);
	$stmt->bindParam(':chassis', $chassis);
    $stmt->bindParam(':plate', $plate);
    $stmt->bindParam(':year', $year);
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
else 	if($type=='motocycle' and $used=='Walk and affairs' and $period=='annually'){
	$amount = 70000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO moto ( fname,lname,telephone,email,type, used,mark,chassis,plate, year,period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:type, :used,:mark,:chassis,:plate,:year,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':used', $used);
	$stmt->bindParam(':mark', $mark);
	$stmt->bindParam(':chassis', $chassis);
    $stmt->bindParam(':plate', $plate);
    $stmt->bindParam(':year', $year);
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
else 	if($type=='motocycle' and $used=='Driving school' and $period=='semi'){
	$amount = 45000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO moto ( fname,lname,telephone,email,type, used,mark,chassis,plate, year,period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:type, :used,:mark,:chassis,:plate,:year,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':used', $used);
	$stmt->bindParam(':mark', $mark);
	$stmt->bindParam(':chassis', $chassis);
    $stmt->bindParam(':plate', $plate);
    $stmt->bindParam(':year', $year);
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
else 	if($type=='motocycle' and $used=='Driving school' and $period=='annually'){
	$amount = 90000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO moto ( fname,lname,telephone,email,type, used,mark,chassis,plate, year,period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:type, :used,:mark,:chassis,:plate,:year,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':used', $used);
	$stmt->bindParam(':mark', $mark);
	$stmt->bindParam(':chassis', $chassis);
    $stmt->bindParam(':plate', $plate);
    $stmt->bindParam(':year', $year);
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
else 	if($type=='coaster' and $used=='Driving school' and $period=='semi'){
	$amount = 95000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO moto ( fname,lname,telephone,email,type, used,mark,chassis,plate, year,period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:type, :used,:mark,:chassis,:plate,:year,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':used', $used);
	$stmt->bindParam(':mark', $mark);
	$stmt->bindParam(':chassis', $chassis);
    $stmt->bindParam(':plate', $plate);
    $stmt->bindParam(':year', $year);
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
else 	if($type=='coaster' and $used=='Driving school' and $period=='annually'){
	$amount = 190000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO moto ( fname,lname,telephone,email,type, used,mark,chassis,plate, year,period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:type, :used,:mark,:chassis,:plate,:year,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':used', $used);
	$stmt->bindParam(':mark', $mark);
	$stmt->bindParam(':chassis', $chassis);
    $stmt->bindParam(':plate', $plate);
    $stmt->bindParam(':year', $year);
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
else 	if($type=='coaster' and $used=='Walk and affairs' and $period=='semi'){
	$amount = 70000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO moto ( fname,lname,telephone,email,type, used,mark,chassis,plate, year,period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:type, :used,:mark,:chassis,:plate,:year,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':used', $used);
	$stmt->bindParam(':mark', $mark);
	$stmt->bindParam(':chassis', $chassis);
    $stmt->bindParam(':plate', $plate);
    $stmt->bindParam(':year', $year);
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
else 	if($type=='coaster' and $used=='Walk and affairs' and $period=='annually'){
	$amount = 140000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO moto ( fname,lname,telephone,email,type, used,mark,chassis,plate, year,period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:type, :used,:mark,:chassis,:plate,:year,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':used', $used);
	$stmt->bindParam(':mark', $mark);
	$stmt->bindParam(':chassis', $chassis);
    $stmt->bindParam(':plate', $plate);
    $stmt->bindParam(':year', $year);
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
else 	if($type=='coaster' and $used=='Transport of goods or Persons' and $period=='semi'){
	$amount = 250000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO moto ( fname,lname,telephone,email,type, used,mark,chassis,plate, year,period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:type, :used,:mark,:chassis,:plate,:year,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':used', $used);
	$stmt->bindParam(':mark', $mark);
	$stmt->bindParam(':chassis', $chassis);
    $stmt->bindParam(':plate', $plate);
    $stmt->bindParam(':year', $year);
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
else 	if($type=='coaster' and $used=='Transport of goods or Persons' and $period=='annually'){
	$amount = 500000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO moto ( fname,lname,telephone,email,type, used,mark,chassis,plate, year,period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:type, :used,:mark,:chassis,:plate,:year,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':used', $used);
	$stmt->bindParam(':mark', $mark);
	$stmt->bindParam(':chassis', $chassis);
    $stmt->bindParam(':plate', $plate);
    $stmt->bindParam(':year', $year);
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
else 	if($type=='track' and $used=='Transport of goods or Persons' and $period=='semi'){
	$amount = 1000000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO moto ( fname,lname,telephone,email,type, used,mark,chassis,plate, year,period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:type, :used,:mark,:chassis,:plate,:year,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':used', $used);
	$stmt->bindParam(':mark', $mark);
	$stmt->bindParam(':chassis', $chassis);
    $stmt->bindParam(':plate', $plate);
    $stmt->bindParam(':year', $year);
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
else 	if($type=='track' and $used=='Transport of goods or Persons' and $period=='annually'){
	$amount = 2000000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO moto ( fname,lname,telephone,email,type, used,mark,chassis,plate, year,period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:type, :used,:mark,:chassis,:plate,:year,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':used', $used);
	$stmt->bindParam(':mark', $mark);
	$stmt->bindParam(':chassis', $chassis);
    $stmt->bindParam(':plate', $plate);
    $stmt->bindParam(':year', $year);
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
else 	if($type=='track' and $used=='Driving school' and $period=='semi'){
	$amount = 350000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO moto ( fname,lname,telephone,email,type, used,mark,chassis,plate, year,period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:type, :used,:mark,:chassis,:plate,:year,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':used', $used);
	$stmt->bindParam(':mark', $mark);
	$stmt->bindParam(':chassis', $chassis);
    $stmt->bindParam(':plate', $plate);
    $stmt->bindParam(':year', $year);
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
else 	if($type=='track' and $used=='Driving school' and $period=='annually'){
	$amount = 700000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO moto ( fname,lname,telephone,email,type, used,mark,chassis,plate, year,period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:type, :used,:mark,:chassis,:plate,:year,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':used', $used);
	$stmt->bindParam(':mark', $mark);
	$stmt->bindParam(':chassis', $chassis);
    $stmt->bindParam(':plate', $plate);
    $stmt->bindParam(':year', $year);
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
else 	if($type=='track' and $used=='Walk and affairs' and $period=='semi'){
	$amount = 300000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO moto ( fname,lname,telephone,email,type, used,mark,chassis,plate, year,period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:type, :used,:mark,:chassis,:plate,:year,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':used', $used);
	$stmt->bindParam(':mark', $mark);
	$stmt->bindParam(':chassis', $chassis);
    $stmt->bindParam(':plate', $plate);
    $stmt->bindParam(':year', $year);
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
else 	if($type=='track' and $used=='Walk and affairs' and $period=='annually'){
	$amount = 600000;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO moto ( fname,lname,telephone,email,type, used,mark,chassis,plate, year,period,amount,users)
    VALUES (:fname,:lname,:telephone,:email,:type, :used,:mark,:chassis,:plate,:year,:period,:amount,:user)");

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':used', $used);
	$stmt->bindParam(':mark', $mark);
	$stmt->bindParam(':chassis', $chassis);
    $stmt->bindParam(':plate', $plate);
    $stmt->bindParam(':year', $year);
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
                <legend>Car Information
                </legend>
				                <p>
                    <label>Car type *
                    </label>
                    <select name="type">
                        <option>
                        </option>
					    <option value="motocycle" >Motocycle
                        </option>
                        <option value="small" >Smal Car
                        </option>
						
											    <option value="coaster" >Coaster
                        </option>
						
						<option value="track" >Track
                        </option>





                    </select>
                </p>
				
				                <p>
                    <label>Car used for
					
								
					
                    </label>
					
					                    <select name="used">
                        <option>
                        </option>
					    <option value="Walk and affairs" >Walk and affairs
                        </option>
                        <option value="Driving school" >Driving school
                        </option>
						<option value="Transport of goods or Persons">Transport of goods or Persons
                        </option>





                    </select>

                </p>


                <p>
                    <label>Mark *
                    </label>
                    <input type="text" class="long" name="mark"/>
                </p>
                <p>
                    <label class="optional">Chassis no *
                    </label>
                    <input type="text" class="long" name="chassis"/>
                </p>
                <p>
                    <label>Plate no *
                    </label>
                    <input type="text" class="long" name="plate"/>
                </p>
                <p>
                    <label>Year of Fabrication *
                    </label>
                    <select class="date" name="year">
					    <option>
						</option>
                        <option value="2017" >2017
                        </option>
                        <option value="2016" >2016
                        </option>
                        <option value="2015" >2015
                        </option>
                        <option value="2014" >2014
                        </option>
                        <option value="2013" >2013
                        </option>
                        <option value="2012" >2012
                        </option>
                        <option value="2011" >2011
                        </option>
                        <option value="2010" >2010
                        </option>
                        <option value="2009" >2009
                        </option>
                        <option value="2008" >2008
                        </option>
                        <option value="2007" >2007
                        </option>
                        <option value="2006" >2006
                        </option>
                        <option value="2005" >2005
                        </option>
                        <option value="2004" >2004
                        </option>
                        <option value="2003" >2003
                        </option>
                        <option value="2002" >2002
                        </option>
                        <option value="2001" >2001
                        </option>
                        <option value="2000" >2000
                        </option>
                        <option value="1999" >1999
                        </option>
                        <option value="1998" >1998
                        </option>
                        <option value="1997" >1997
                        </option>
                        <option value="1996" >1996
                        </option>
                        <option value="1995" >1995
                        </option>
                        <option value="1994" >1994
                        </option>
                        <option value="1993" >1993
                        </option>
                        <option value="1992" >1992
                        </option>
                        <option value="1991" >1991
                        </option>
                        <option value="1990" >1990
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
	 $apace=mysql_query("select * from moto  where users='$user'  limit 1",$db);
	 while($rows=mysql_fetch_array($apace)){
		 echo $rows['amount'];
	 }
	 ?>
                    </label>
                   
                </p>

            </fieldset>
            <div><button class="button" name="send">Send &raquo;</button></div>
			            <div><a href="reporting.php?users=<?php echo $_SESSION['username'];?>" class="button" >Print Slip &raquo;</a></button></div>

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
