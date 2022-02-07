<?php
include_once 'db_connnection.php';
$sql = "DELETE FROM courses WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    header('location:courses.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>