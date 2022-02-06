<?php
include_once 'db_connnection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE student set img='" . $_POST['img'] . "', name='" . $_POST['name'] . "', email='" . $_POST['email'] . "' ,phone='" . $_POST['phone'] . "',enroll_number='".$_POST['enroll_number']. "' ,date_of_admission='" . $_POST['date_of_admission'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM student WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="Assets/bootstrap.min.css" rel="stylesheet">
    <link href="Assets/Dashbord.css" rel="stylesheet">
    <link href="Assets/student.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,700&display=swap" rel="stylesheet">
    <title>Students</title>
</head>
<body>
<div class="container-fluid">
         <div class="row flex-nowrap">
           <?php
           include 'sidebar.php'
           ?>
                
         </div>
        <div class="col">
            <?php
            include 'searchbar.php'
            ?>
            

           
         <?php if(isset($message)) { echo $message; } ?>
             

           
          <form name="frmUser" method="post" action="">
          <h1>Update</h1>
            <fieldset>

                  <div class="form-group">
                   <label for="img">Entrez votre image</label>
                   <input type="file" class="form-control" alt="profile picture"  name="img" value="<?php echo $row['img']?>">
                 </div>  
                 <div class="form-group">
                   <label for="id">id</label>
                   <input type="text" class="form-control" alt="id"  name="id" value="<?php echo $row['id']?>">
                 </div>  
                 <div class="form-group">
                   <label for="name"> nom</label>
                   <input type="text" class="form-control"  placeholder="Entrez votre nom" name="name" value="<?php echo $row['name']?>">
                 </div>
                 <div class="form-group">
                   <label for="email"> email</label>
                   <input type="email" class="form-control"  placeholder="user@email.com" name="email" value="<?php echo $row['email']?>">
                 </div>
                 <div class="form-group">
                   <label for="phone"> phone</label>
                   <input type="text" class="form-control"  placeholder="123XXXXXXXXXX" name="phone" value="<?php echo $row['phone']?>">
                 </div>
                 <div class="form-group">
                   <label for="enroll_number"> enroll number</label>
                   <input type="text" class="form-control"  placeholder="123XXXXXXXXXX" name="enroll_number" value="<?php echo $row['enroll_number']?>">
                 </div>
                 <div class="form-group">
                   <label for="date_of_admission"> date d'admission</label>
                   <input type="date" class="form-control"  placeholder="123XXXXXXXXXX" name="date_of_admission" value="<?php echo $row['date_of_admission']?>">
                 </div>

              <input id="submit"
                 class="btn btn-info my-3 px-5" type="submit"
                        name="submit" value="submit"
                        onclick="on_submit()"> 
</div>
</fieldset>
</form>
</div>
<script src="js/bootstrap.bundle.min.js" ></script> 
</body>
</html>