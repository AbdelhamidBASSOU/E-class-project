<?php
      session_start ();
    include_once("db_connnection.php"); 
         $message="";
         $check=$_POST['check']?? '';
         $name=$_COOKIE['username']?? '';  
        if(!empty($name)||!empty($pass)) {
if (!preg_match ("/^[a-zA-z]*$/", $name) ) {  
    $ErrMsg = "Only alphabets and whitespace are allowed.";  
             echo $ErrMsg;  
} else {  
    echo $name;  
} 
         $pass=$_COOKIE['password']?? '';
          
if (!preg_match ("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/", $pass) ) {  
    $ErrMsg = "invalid password.";  
             echo $ErrMsg;  
} else {  
    echo $pass;  
} 
    }
    if($check=='on'){
      setcookie ("username",$_POST["username"],time()+ 86400);
	    setcookie ("password",$_POST["password"],time()+ 86400);
    }else {
      setcookie("username","");
      setcookie("password","");
    }
    if(count($_POST)>0)
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = mysqli_query($conn,"SELECT * from user where username='$username' and password='$password'");
        $row=mysqli_fetch_array($result);
    if(is_array($row)) {
   
        $_SESSION["username"]=$row['username'];
        $_SESSION["password"]=$row['password'];
      }
     
    else {
      $message="Invalid Username or Password!";
    }
      }
    if(isset($_SESSION["username"])) {
         header("Location:dashbord.php");
      }
  ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="Assets/bootstrap.min.css" rel="stylesheet" />
    <link href="Assets/sign-in.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,700&display=swap"
      rel="stylesheet"
    />
    <title>login page</title>
  </head>
  <body>
    <?php
    include 'db_connnection.php'
    ?>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-6 col-md-4">
          <form class="bg-white p-3" method="POST" action="">
            <div class="m-4">
              <a
                class="navbar-brand text-black border-start border-3 border-info px-2 mx-3"
                href="#"
                >E-Classe</a
              >
            </div>
            <h6 class="text-center mb-1">SIGN IN</h6>
            <p class="text-center mb-5">
              Enter your credentials to access your account
            </p>
            <?php if(!empty($message)){?>
            <div class="alert alert-danger text-center">
           <?php echo $message ?>
            </div> 
          <?php }?>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-secondary"
                >username</label
              >
              <input
              value=""
                type="text"
                class="form-control"
                id="exampleInputEmail1"
                name="username"
                placeholder="Enter your username"
              />
            </div>
            <div class="mb-3">
              <label
                for="exampleInputPassword1"
                class="form-label text-secondary"
                >Password</label
              >
              <input
              value=""
                type="password"
                class="form-control"
                id="exampleInputPassword1"
                name="password"
                placeholder="Enter your password"
              />
              <div class="form-check form-switch  mt-2 mb-2">
                <input name="check" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked">Remember me</label>
              </div>
            <input type="submit" class="btn btn-info text-white w-100"
              value="SIGN IN" name="submit"
              
           />
            <p class="text-center mt-3">
              Forgot your password<a href="#" class="text-info"
                >?Reset Password</a
              >
            </p>
          </form>
        </div>
      </div>
    </div>
    <script src="/Assets/bootstrap.bundle.min.js"></script>
  </body>
</html>
