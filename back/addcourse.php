<!DOCTYPE html>
<html>

<head>
	<title>Insert Course page</title>
</head>

<body>
	<center>
		<?php
require_once('db_connnection.php');
		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "e_class_db");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		if(isset($_POST['submit']))
		{
		print_r($_FILES['img']);
        
        //$id = $_POST['id'];
		$img=$_FILES['img']['name'];
		if(!file_exists('./img/')){
			mkdir('./img/');
		}
		move_uploaded_file($_FILES['img']['tmp_name'],'./img/'.$_FILES['img']['name']);
        $id = $_POST['id'];
		$name = $_POST['name']; 
		$link = $_POST['link'];
		$enroll_number = $_POST['enroll_number'];
		$date_of_admission = $_POST['date_of_admission'];
        $sql = "INSERT INTO courses (img,id,name,link) 
		VALUES  ('$img','$id','$name','$link')";
		mysqli_query($conn, $sql);
		header('location:courses.php');
		}
		// Taking all 5 values from the form data(input)
		?>
	</center>
</body>

</html>