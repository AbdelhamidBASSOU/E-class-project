<?php
include_once 'db_connnection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE courses set img='" . $_POST['img'] . "', name='" . $_POST['name'] . "' ,link='" . $_POST['link'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM courses WHERE id='" . $_GET['id'] . "'");
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
                   <label for="img">course image</label>
                   <input type="file" class="form-control" alt="course picture"  name="img" value="<?php echo $row['img']?>">
                 </div>  
                 <div class="form-group">
                   <input type="hidden" class="form-control" alt="id"  name="id" value="<?php echo $row['id']?>">
                 </div>  
                 <div class="form-group">
                   <label for="name"> nom</label>
                   <input type="text" class="form-control"  placeholder="Entrez votre nom" name="name" value="<?php echo $row['name']?>">
                 </div>
                 <div class="form-group">
                   <label for="link"> link</label>
                   <input type="link" class="form-control"  placeholder="https://www.xxxxxx0x" name="link" value="<?php echo $row['link']?>">
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