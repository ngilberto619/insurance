<?php
include'db.php';
	session_start();

	//DB configuration Constants
	define('_HOST_NAME_', 'localhost');
	define('_USER_NAME_', 'root');
	define('_DB_PASSWORD', '');
	define('_DATABASE_NAME_', 'insurance');


	//PDO Database Connection
	try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}

	if(isset($_POST['signin'])){
		$errMsg = '';
		//username and password sent from Form
		$username = trim($_POST['username']);
		$password = md5($_POST['password']);

		if($username == '')
			$errMsg .= 'You must enter your username<br>';

		if($password == '')
			$errMsg .= 'You must enter your Password<br>';


		if($errMsg == ''){
			$records = $databaseConnection->prepare('SELECT * FROM  customer WHERE username=:username and password=:password');
			$records->bindParam(':username', $username);
$records->bindParam(':password', $password);
			$records->execute();
			$results = $records->fetch(PDO::FETCH_ASSOC);
			if(count($results)>0 && ($results['password']==$password  )&&($results['type']=='admin'  )){
				$_SESSION['username']=$results['username'];
				header('location:admin/welcome.php');
				exit;
			}
			else if(count($results)>0 && ($results['password']==$password  )&&($results['type']=='user'  )){
				$_SESSION['username']=$results['username'];
				header('location:customer/welcome.php');
				exit;
			}
		
			else{
				$errMsg .= 'Username and Password are not found<br>';
			}
		}
	}


?>




<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  

      <link rel="stylesheet" href="css/esther.css">

  
</head>

<body>
  
<div class="container">
<center><h4 style="color:#D1222D;"><i>Customer Login form</i></h4>
</center>

  <form action="" method="post" >

  	<?php
			if(isset($errMsg)){
				echo '<div style="color:#FF0000;text-align:center;font-size:9px;">'.$errMsg.'</div>';
			}
		?>
  
    <div class="row">

      <h6><i>Enter your Username and Password</i></h6>
	   <div class="input-group input-group-icon">
        <input type="text" class="form-control" placeholder="Username" name="username"/>
      </div>
      <div class="input-group input-group-icon">
        <input type="password" placeholder="Password"  name="password" />
      </div>
	
    </div>
		<div class="input-group">
     <button type="submit" name="signin" class="btn">login</button>
      </div>
	    <p class="change_link">
									Not registered yet ?
									<a href="form.php" class="register">Join us</a>
								</p>

  </form>

</div>
  <div class="col-md-12" id="footer"><h5> copyright reserved &copy gilberto <?php $d=date("Y"); echo $d; ?> | gilberto619</h5></div>

</body>
</html>
