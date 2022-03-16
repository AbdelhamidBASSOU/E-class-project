<?php
include_once 'db_connnection.php';
$result = mysqli_query($conn,"SELECT * FROM student");
?>

<?php
if(isset($_GET['id'])){
if(count($_POST)>0) {
  mysqli_query($conn,"UPDATE student set img='" . $_POST['img'] . "', name='" . $_POST['name'] . "', email='" . $_POST['email'] . "' ,phone='" . $_POST['phone'] . "',enroll_number='".$_POST['enroll_number']. "' ,date_of_admission='" . $_POST['date_of_admission'] . "' WHERE id='" . $_POST['id'] . "'");
    $message = "Record Modified Successfully";
}
    $result = mysqli_query($conn,"SELECT * FROM student WHERE id='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);
  }
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
            <div class="table-responsive " style="height:calc(100vh - 200px); overflow:auto;">
                <table class="table table-borderless table-collapse align-middle table-hover">
                    <thead class="sticky-top bg-light">
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
                          <td><img alt=student-picture src='./img/<?php echo $row["img"]?>' class='rounded-circle' style= 'width:60px; height:60px;'></td>
                          <td><?php echo $row["name"]?></td>
                          <td><?php echo $row["email"]?></td>                          
                          <td><?php echo $row["phone"]?></td>                          
                          <td><?php echo $row["enroll_number"]?></td>
                          <td><?php echo $row["date_of_admission"]?></td>
                          <td>                    
                              <a href='?id=<?php echo $row['id']?>'><i class="fal fa-pen text-info"></i></a>
                              <a href='delete.php?id=<?php echo $row['id']?>'><i class ="fal fa-trash text-info mx-1"></i></a>
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
                <!-- Modal -->
<div class="model" id="bgdark" >
  <div class="modal-dialog" id="exampleModal">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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

            </fieldset>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
     </div> 
              
 
    
 



<script src="/Assets/bootstrap.bundle.min.js" ></script>   
</body>
                  </main>
</html>