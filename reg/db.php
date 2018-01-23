<?php
  session_start();
  $fname="";
  $lname="";
  $username="";
  $email="";
  $password="";
  $address_1="";
  $address_2="";
  $errors=array();
//connect to the database
$db=mysqli_connect('localhost','root', '','insurance');

//if the register button is clicked
if(isset($_POST['register'])){
$fname=mysql_real_escape_string($_POST['fname']);
$lname=mysql_real_escape_string($_POST['lname']);
$username=mysql_real_escape_string($_POST['username']);
$email=mysql_real_escape_string($_POST['email']);
$password_1=mysql_real_escape_string($_POST['password_1']);
$password_2=mysql_real_escape_string($_POST['password_2']);
$address_1=mysql_real_escape_string($_POST['address_1']);
$address_2=mysql_real_escape_string($_POST['address_2']);
//ensure that form fields are filled properly
if(empty($fname)){
array_push($errors,"First name is required");
}
if(empty($lname)){
array_push($errors,"Last name is required");
}
if(empty($username)){
array_push($errors,"username is required");
}
if(empty($email)){
array_push($errors,"email is required");
}
if(empty($password_1)){
array_push($errors,"password  is required");
}
if($password_1 != $password_2){
array_push($errors,"the two passwords  do not match");
}

//if there are no errors save user to database
if(count($errors)==0){
$password=md5($password_1);//encrypt password before storing in data base(security)
$sql="INSERT INTO users(fname,lname,username,email,password,address_1,address_2)
      VALUES ('$fname','$lname','$username','$email','$password')";
mysqli_query($db1,$sql);
$_SESSION['username']=$username;
$_SESSION['success']="you are logged in";
header('location:../index.php');
}
}


?>