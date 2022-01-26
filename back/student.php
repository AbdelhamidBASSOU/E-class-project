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
              <button type="button" class="btn  bg-info text-white my-3">ADD NEW STUDENT</button>
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
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <?php
                    include 'studentlist.php'
                    ?>
                    <tbody>
                      <?php
                    foreach ($users as $user){
                      echo "<tr class='bg-white'>
                          <td><img alt=student-picture src={$user['img']} class='rounded-circle'></td>
                          <td>{$user['name']}</td>
                          <td>{$user['email']}</td>
                          <td>{$user['phone']}</td>
                          <td>{$user['enroll number']}</td>
                          <td>{$user['date of admission']}</td>
                          <td><i class='fal fa-pen text-info'></i><i class='fal fa-trash text-info mx-1'></i></td>
                      </tr>";
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