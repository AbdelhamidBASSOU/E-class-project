<?php
include_once("db_connnection.php");
if(isset($_POST['submit']))
			{
				
				$username = $_POST['username'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$rpassword = $_POST['rpassword'];
				
				if($password === $rpassword)
				{
					
					$query= "SELECT * from user WHERE username='$username'";
					$query_run = mysqli_query($conn,$query);
					
					if(mysqli_num_rows($query_run)>0)
					{
						
						echo '<script type="text/javascript"> alert("User already exists.. try another username") </script>';
					}
					else
					{	
						$query= "INSERT into user(username,email,password) values('$username','$email','$password')";
						$query_run = mysqli_query($conn,$query);
						
						if($query_run)
						{
							echo '<script type="text/javascript"> alert("User Registered.. Go to login page to login") </script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert("Error!") </script>';
						}
					}	
				}
				else
				{
					echo '<script type="text/javascript"> alert("Password and confirm password does not match!")</script>';	
				}
			}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="Assets/bootstrap.min.css" rel="stylesheet" />
    <link href="Assets/styles.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" integrity="sha512-Oy+sz5W86PK0ZIkawrG0iv7XwWhYecM3exvUtMKNJMekGFJtVAhibhRPTpmyTj8+lJCkmWfnpxKgT2OopquBHA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,700&display=swap"
      rel="stylesheet"
    />
    <title>SIGN-UP PAGE</title>
    
  </head>
  <body>
    
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-6 col-md-4">
          <form class="bg-white p-3" id="form" method="POST" action="index.php">
            <div class="m-4">
              <a
                class="navbar-brand text-black border-start border-3 border-info px-2 mx-3"
                href="#"
                >E-Classe</a
              >
            </div>
            <h6 class="text-center mb-1">SIGN UP</h6>
            <p class="text-center mb-3">
              Enter your credentials to creat your account
            </p>

            <div class="mb-3">
            <div class="form-controll success">
              <label for="exampleInputEmail1" class="form-label text-secondary" >username</label>
               
              <input
              value=""
                type="text"
                class="form-control"
                id="name"
                name="username"
                placeholder="Enter your username"
              />
              <i class="bi bi-check-circle-fill"></i>
			        <i class="bi bi-exclamation-circle-fill"></i>
              <small></small>
              </div>
              <div class="form-controll error">
              <label for="exampleInputEmail1" class="form-label text-secondary">email</label>
               
              <input
              value=""
                type="text"
                class="form-control"
                id="email"
                name="email"
                placeholder="Enter your email"
              />
              <i class="bi bi-check-circle-fill"></i>
			        <i class="bi bi-exclamation-circle-fill"></i>
              <small></small>
              </div>
              <div class="form-controll">
              <label for="exampleInputPassword1"class="form-label text-secondary" >Password</label>
                
                <input
              value=""
                type="password"
                class="form-control"
                id="password"
                name="password"
                placeholder="Enter your password"
              />
              <i class="bi bi-check-circle-fill"></i>
			        <i class="bi bi-exclamation-circle-fill"></i>
              <small></small>
              </div>
              <div class="form-controll">
                <label for="exampleInputPassword1"class="form-label text-secondary">Repeat password</label>
                  
                <input
                value=""
                  type="password"
                  class="form-control"
                  id="rpassword"
                  name="rpassword"
                  placeholder="Enter your password again"
                />
                <i class="bi bi-check-circle-fill"></i>
			          <i class="bi bi-exclamation-circle-fill"></i>
                <small></small>
            </div>
            <input id="submit-btn" type="submit" class="btn btn-info text-white w-100 mt-3"
              value="SIGN UP" name="submit"/>
              <p class="text-center mt-3">
              Already have an account<a href="index.php" class="text-info"
                >?SIGN-IN</a
              >
            </p>
            
          </form>



          <?php
			if(isset($_POST['submit-btn']))
			{
				
				$username = $_POST['username'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$rpassword = $_POST['rpassword'];
				
				
				if($password==$rpassword)
				{
					
					$query= "select * from user WHERE username='$username'";
					$query_run = mysqli_query($con,$query);
					
					if(mysqli_num_rows($query_run)>0)
					{
						// there is already a user with the same username
						echo '<script type="text/javascript"> alert("User already exists.. try another username") </script>';
					}
					else
					{	
						$query= "insert into user values('','$username','$email','$password')";
						$query_run = mysqli_query($con,$query);
						
						if($query_run)
						{
							echo '<script type="text/javascript"> alert("User Registered.. Go to login page to login") </script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert("Error!") </script>';
						}
					}	
				}
				else
				{
					echo '<script type="text/javascript"> alert("Password and confirm password does not match!")</script>';	
				}
			}
		?>
        </div>
      </div>
    </div>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="validationscript.js"></script>

    
  </body>
</html>