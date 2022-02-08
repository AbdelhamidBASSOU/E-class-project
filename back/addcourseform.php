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
    <title>Courses</title>
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
        
              <h1>Add course</h1>
             <form method="POST" action="addcourse.php" enctype="multipart/form-data">
               <fieldset> 
                <div class="form-group">
                   <label for="img">course image</label>
                   <input type="file" class="form-control" alt="course picture"  name="img">
                 </div>  
                 <div class="form-group">
                   <input type="hidden" class="form-control" alt="id"  name="id">
                 </div>  
                 <div class="form-group">
                   <label for="name"> nom</label>
                   <input type="text" class="form-control"  placeholder="course name" name="name">
                 </div>
                 <div class="form-group">
                   <label for="link"> link</label>
                   <input type="link" class="form-control"  placeholder="https://www.xxxxxx0x" name="link">
                 </div>
                 <input id="submit"
                 class="btn btn-info my-3 px-5" type="submit"
                        name="submit" value="submit"
                        onclick="on_submit()"> 
                 
               </fieldset>
             </form>
             </div>
           





<script src="js/bootstrap.bundle.min.js" ></script>   
</body>
</html>