<?php include('db.php'); ?>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<h2>Register</h2>
</div>
<div class="col-md-6" id="me">
<form method="post" action="register.php">
<!--display validation errors here-->
<?php include('errors.php'); ?>
<div class="input-group">
     <label>First Name</label>
     <input type="text" name="fname" placeholder="First name" value="<?php echo $fname;?>">
</div>
<div class="input-group">
     <label>Last Name</label>
     <input type="text" name="lname" placeholder="Last Name" value="<?php echo $lname;?>">
</div>
<div class="input-group">
     <label>Username</label>
     <input type="text" name="username" placeholder="Username" value="<?php echo $username;?>">
</div>
<div class="input-group">
     <label>Email</label>
     <input type="text" name="email" placeholder="example@example.com" value="<?php echo $email;?>">
</div>
<div class="input-group">
     <label>Password</label>
     <input type="password" name="password_1">
</div>
<div class="input-group">
     <label>Confirm Password</label>
     <input type="password" name="password_2">
</div>
<div class="input-group">
     <label>Address 1</label>
     <input type="text" name="address_1" placeholder="District" value="<?php echo $address_1;?>">
</div>
<div class="input-group">
     <label>Address 2</label>
     <input type="text" name="address_2" placeholder="Sector" value="<?php echo $address_2;?>">
</div>
<div class="input-group">
     <button type="submit" name="register" class="btn">Register</button>
</div>
<p>Already a member?<a href="login.php">sign in</p>
</form> </div>


</body>
</html>