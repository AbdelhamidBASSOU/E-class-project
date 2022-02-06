<?php
include_once 'db_connnection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE student set img='" . $_POST['img'] . "', name='" . $_POST['name'] . "', email='" . $_POST['email'] . "' ,phone='" . $_POST['phone'] . "',enroll_number='".$_POST['enroll_number']. "' ,date_of_admission='" . $_POST['date_of_admission'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM student WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="student.php">student List</a>
</div>
<br>
<div class="form-group">
                   <label for="img">Entrez votre image</label>
                   <input type="file" class="form-control" alt="profile picture"  name="img">
                 </div>  
                 <div class="form-group">
                   <label for="id">id</label>
                   <input type="text" class="form-control" alt="id"  name="id">
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
<br>
<input id="submit"
                 class="btn btn-info my-3 px-5" type="submit"
                        name="submit" value="submit"
                        onclick="on_submit()"> 

</form>
</body>
</html>