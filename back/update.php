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
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
                     <tr>
                        <th scope="col"></th>
                        <th scope="col" class="text-muted" >Name</th>
                        <th scope="col" class="text-muted">Email</th>
                        <th scope="col" class="text-muted">phone</th>
                        <th scope="col" class="text-muted">Enroll Number</th>
                        <th scope="col" class="text-muted">Date of admission</th>
                        <th scope="col" class="text-muted"> Actions</th>
                      </tr>
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
       </tr>
		<td><a href="updateprocess.php?id=<?php echo $row["id"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>