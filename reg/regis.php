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
                    
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="register" class="animate form" >
                            <form  method="post" action="reg.php" > 
							<?php include('errors.php'); ?>
                                <h1> Sign up </h1> 
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
									<input type="submit" name="reg"  value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>