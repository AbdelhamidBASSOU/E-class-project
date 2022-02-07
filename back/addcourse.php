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
		
		// Taking all 5 values from the form data(input)
		$img = $_REQUEST['img'];
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
		$link = $_REQUEST['link']; 
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO courses VALUES ('$img','$id','$name',
			'$link')";
		
		if(mysqli_query($conn, $sql)){
			
                    header("location:courses.php");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>