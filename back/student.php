<?php
include_once 'db_connnection.php';
$result = mysqli_query($conn,"SELECT * FROM student");
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
<main>
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
              <div class="bg-light div container-fluid">
                <div class="d-flex align-items-center  justify-content-center justify-content-sm-between  mt-3">
              <h5 class="fw-bolder d-none d-sm-block mx-3">Students List</h5>
              <div class="d-flex align-items-center">
              <i class="far fa-sort text-info far fs-6 fa-sort me-3  d-sm-block"></i>
              <a href="addform.php" type="button" class="btn  bg-info text-white my-3">ADD NEW STUDENT</a>
            </div>
            </div>
            <hr>
            <div class="table-responsive">
                <table class="table table-borderless table-collapse align-middle table-hover">
                    <thead>
                      <tr>
                        <th scope="col"></th>
                        <th scope="col" class="text-muted" >Name</th>
                        <th scope="col" class="text-muted">Email</th>
                        <th scope="col" class="text-muted">phone</th>
                        <th scope="col" class="text-muted">Enroll Number</th>
                        <th scope="col" class="text-muted">Date of admission</th>
                        <th scope="col" class="text-muted"> Actions</th>
                      </tr>
                    </thead>
                   
                    <tbody>
                      <?php
                     
                      $i=0;
                      while($row = mysqli_fetch_array($result)) {
                      ?>
                    
                     <tr class='bg-white'>
                          <td><img alt=student-picture src='<?php echo $row["img"]?>' class='rounded-circle' style= 'width:60px; height:60px;'></td>
                          <td><?php echo $row["name"]?></td>
                          <td><?php echo $row["email"]?></td>                          
                          <td><?php echo $row["phone"]?></td>                          
                          <td><?php echo $row["enroll_number"]?></td>
                          <td><?php echo $row["date_of_admission"]?></td>
                          <td><a href='view.php' class='btn btn-sm btn-outline-info'>view</a>                        
                              <a href='update.php' class='btn btn-sm btn-outline-info'>update</a>
                              <a href='delete.php' class='btn btn-sm btn-outline-info'>delete</a>
                          </td> 

                          
                      </tr>
                      <?php
                       $i++;
                      }
                     ?>
                      
                
                    </tbody>
                  </table>
              </div>

            </div>
                </div> 
     </div> 
              
 </div>
    
    


<script src="/Assets/bootstrap.bundle.min.js" ></script>   
</body>
                  </main>
</html>