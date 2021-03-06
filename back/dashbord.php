
<?php
    require_once 'db_connnection.php';
   
    $result=mysqli_query($conn,"SELECT COUNT(*) FROM courses");
    $result=mysqli_fetch_column($result);
    $sum_students=mysqli_query($conn,"SELECT COUNT(*) FROM student");
    $sum_students=mysqli_fetch_column($sum_students);
    $sum_payments=mysqli_query($conn,"SELECT SUM(Amount_paid) FROM payment");
    $sum_payments=mysqli_fetch_column($sum_payments);
    $sum_users=mysqli_query($conn,"SELECT COUNT(*) FROM user");
    $sum_users=mysqli_fetch_column($sum_users);

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,700&display=swap" rel="stylesheet">
    <title>Dashbord</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php include 'sidebar.php' ?>
        </div>
        <div class="col">
            
              <?php
              include 'searchbar.php'
              ?>
              <div class="row">
              <div class=" col-12 col-sm-6 col-md-3 py-3">
                <div class="card card1" >
                    <i class="fas fa-graduation-cap fs-1 px-3 py-3" ></i>
                    <span class="px-3 py-3" >Students</span>
                    <div class="card-body">
                      <p class="card-text text-end"><?php echo($sum_students) ?></p>
                    </div>
                </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-3 py-3">
                    <div class="card card2">
                        <i class="fal fa-bookmark fs-1 px-3 py-3" ></i>
                        <span class="px-3 py-3">Course</span>
                        <div class="card-body">
                          <p class="card-text text-end"><?php echo($result) ?></p>
                        </div>
                    </div>
                    </div>
                    <div class=" col-12 col-sm-6 col-md-3 py-3">
                        <div class="card card3">
                            <i class="fal fa-usd-square fs-1 px-3 py-3" ></i>
                            <span class="px-3 py-3" >Payments</a></span>
                            <div class="card-body">
                              <p class="card-text text-end">Dhs<?php echo($sum_payments) ?></p>
                            </div>
                        </div>
                        </div>
                        <div class=" col-12 col-sm-6 col-md-3 py-3">
                            <div class="card card4">
                                <i class="fal fa-user fs-1 px-3 py-3" ></i>
                                <span class="px-3 py-3">Users</span>
                                <div class="card-body">
                                  <p class="card-text text-end"><?php echo($sum_users) ?></p>
                                </div>
                            </div>
                            </div>
                </div> 
     </div> 
              
 </div>
    

<script src="/Assets/bootstrap.bundle.min.js" ></script>    
</body>
</html>