<?php
include('db.php');

?>
<html >
<head>
  
  <title>Sign Up Form</title>
  

      <link rel="stylesheet" href="css/esther.css">
	  

  
</head>






<body>



  
<div class="container">
<center><h4 style="color:#D1222D;"><i>Customer Registration Form</i></h4>
</center>
	   <?php

$servername = "localhost";
$username = "root";
$passw = "";
$dbname = "insurance";
	


if(isset($_POST['send']))
{
	$d=strtotime("today");
	date_default_timezone_set("Africa/Kigali");
$kir=date("y-m-d H:i:s");
    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$usernam= $_POST['username'];
	$telep = $_POST['telephone'];
	$email= $_POST['email'];
	$pass = $_POST['password'];
	$password = md5($pass);
    
	$type="user";

	$gen=$_POST['gender'];
	$fileToUpload=basename($_FILES["fileToUpload"]["name"]);


$chance=mysql_query("select * from customer where type='user'  ",$db);
while($rows=mysql_fetch_array($chance)){
	$userr=$rows['username'];
}

if($usernam==$userr){
	echo"<h1 style='color:red'> $userr Username exist</h1>";
}

else if($fname=='' or $lname=='' or $usernam=='' or $telep==''  or $email=='' or $pass=='' or $telep=='' ){
echo"<h1 style='color:red'> Complete all fields</h1>";	
}


else{
	



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $passw);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
 $stmt = $conn->prepare("INSERT INTO customer (fname,lname,username,telephone,email,password,type,gender,fileToUpload)
    VALUES (:fname,:lname,:usernam,:telep,:email,:password,:type,:gen,:fileToUpload)");


    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
	$stmt->bindParam(':usernam', $usernam);
	$stmt->bindParam(':telep', $telep);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':password', $password);
	$stmt->bindParam(':type', $type);
	$stmt->bindParam(':gen', $gen);
	$stmt->bindParam(':fileToUpload', $fileToUpload);
   $stmt->execute();


 $target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "<h1>Sorry, file already exists.</h1>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 800000000000) {
    echo "<h1>Sorry, your file is too large.</h1>";
    $uploadOk = 0;
}
// Allow certain file formats
//if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//&& $imageFileType != "gif" && $imageFileType != "JPG") {
 // echo "<h1>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</h1>";
 //  $uploadOk = 0;
//}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, error in moving your file.";
    }
}

       echo"<h1 style='color:green'>registration  is  made successfully <img src='img/ok.png' width='20px'></h1>";
    }
catch(PDOException $e)
   {
   echo "Error: " . $e->getMessage();
   }

$conn = null;

}

}

?>


  <form action="" method="post" enctype="multipart/form-data">

    <div class="row">

      <h4>Customer information</h4>
      <div class="input-group input-group-icon">
        <input type="text" class="form-control" placeholder="First Name" name="fname"/>
      </div>
	   <div class="input-group input-group-icon">
        <input type="text" class="form-control" placeholder="Last Name" name="lname"/>
      </div>
	   <div class="input-group input-group-icon">
        <input type="text" class="form-control" placeholder="Username" name="username"/>
      </div>
	  <div class="input-group input-group-icon">
<input  class=" form-control"type="text" placeholder="telephone" name="telephone" name="telephone">      </div>
      <div class="input-group input-group-icon">
        <input type="email" class="form-control" placeholder="Email Adress" name="email"/>
      </div>
      <div class="input-group input-group-icon">
        <input type="password" placeholder="Password"  name="password" />
      </div>
	
    </div>
    <div class="row">
      <div class="col-half">
        <h4>Gender</h4>
        <div class="input-group">
          <input type="radio" name="gender" value="male" class="form-control" id="gender-male"/>
          <label for="gender-male">Male</label>
          <input type="radio" name="gender" value="female" class="form-control"  id="gender-female"/>
          <label for="gender-female">Female</label>
        </div>
		     <div class="input-group">
			 			 <label for="profile"><strong>Profile Picture</strong></label>

			 <input type="file" name="fileToUpload" class="form-control">
             </div>
		
      </div>
    </div>
		<div class="input-group">
     <button type="submit" name="send" class="btn">Register</button>

      </div>
	  <div class="info">
	 <p>Already registered?<a href="login.php">sign in</p>
</div>
  </form>

</div>
  <div class="col-md-12" id="footer"><h5> copyright reserved &copy gilberto <?php $d=date("Y"); echo $d; ?> | gilberto619</h5></div>

</body>
</html>
