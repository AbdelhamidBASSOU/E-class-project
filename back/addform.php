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
    <title>student</title>
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
        
              <h1>Formulaire d'ajout</h1>
             <form method="POST" enctype="multipart/form-data" action="add.php">
               <fieldset> 
                <div class="form-group">
                   <label for="img">Entrez votre image</label>
                   <input type="file" class="form-control" alt="profile picture"  name="img">
                 </div>   
                 <div class="form-group">
                   <label for="name"> nom</label>
                   <input type="text" class="form-control"  placeholder="Entrez votre nom" name="name">
                 </div>
                 <div class="form-group">
                   <label for="email"> email</label>
                   <input type="email" class="form-control"  placeholder="user@email.com" name="email">
                 </div>
                 <div class="form-group">
                   <label for="phone"> phone</label>
                   <input type="text" class="form-control"  placeholder="123XXXXXXXXXX" name="phone">
                 </div>
                 <div class="form-group">
                   <label for="enroll_number"> enroll number</label>
                   <input type="text" class="form-control"  placeholder="123XXXXXXXXXX" name="enroll_number">
                 </div>
                 <div class="form-group">
                   <label for="date_of_admission"> date d'admission</label>
                   <input type="date" class="form-control"  placeholder="123XXXXXXXXXX" name="date_of_admission">
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