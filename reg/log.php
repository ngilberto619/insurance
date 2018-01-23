<?php include('db1.php'); ?>
    <head>
        
      
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
	
    </head>
    <body>
        <div class="container">
       
            <header>
                <h1>Login and Registration Form <span>To Access Insurance Services</span></h1>
			
            </header>
            <section>				
                <div id="container_demo" >
                    
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="log.php" autocomplete="on"> 
                                <h1>Log in</h1> 
                             <p> 
                                    <label >Your First name</label>
                                          <input type="text" name="fname" required="required" placeholder="First name" >

									</p>
								<p> 
     <label>Last Name</label>
     <input type="text" name="lname" placeholder="Last Name" required="required" value="<?php echo $lname;?>">
                                </p>
								<p> 
     <label>Username</label>
     <input type="text" name="username" placeholder="Username" required="required" value="<?php echo $username;?>">
                                </p>
                                <p> 
     <label>Email</label>
     <input type="text" name="email" placeholder="example@example.com" required="required" value="<?php echo $email;?>">
                                </p>
                                <p> 
     <label>Password</label>
     <input type="password" name="password_1">
                                </p>
                                <p> 
     <label>Confirm Password</label>
     <input type="password" name="password_2">
                                </p>

                               
                                <p class="signin button"> 
									<input type="submit" name="log"  value="Sign up"/> 
								</p>
                                <p class="button">
								Already a member ?
									<a href="reg.php"  >Go to Login</a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>