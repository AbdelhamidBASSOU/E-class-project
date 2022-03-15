<!DOCTYPE html>
<html>

<head>
	<title>Insert Course page</title>
</head>

<body>
	<center>
		<?php
require_once('db_connnection.php');
		
		
		// Check connection
		//if($conn === false){
		//	die("ERROR: Could not connect. "
		//		. mysqli_connect_error());
		//}
		if(isset($_POST['submit']))
		{
		print_r($_FILES['img']);
        
		$img=$_FILES['img']['name'];
		if(!file_exists('./img/')){
			mkdir('./img/');
		}
		move_uploaded_file($_FILES['img']['tmp_name'],'./img/'.$_FILES['img']['name']);
        $name = $_POST['name'];
		$email = $_POST['email']; 
		$phone = $_POST['phone'];
		$enroll_number = $_POST['enroll_number'];
		$date_of_admission = $_POST['date_of_admission'];
        $sql = "INSERT INTO student (img,name,email,phone,enroll_number,date_of_admission) 
		VALUES  ('$img','$name','$email','$phone','$enroll_number','$date_of_admission')";
		mysqli_query($conn, $sql);
		header('location:student.php');
		}
		
			?>
	</center>
</body>

</html>

		