<?php
include_once 'db_connnection.php';
      $sql = "DELETE FROM student WHERE id='" . $_GET["id"] . "'";
      if (mysqli_query($conn, $sql)) {
          header('location:student.php');
      } else {
          echo "Error deleting record: " . mysqli_error($conn);
      }
      mysqli_close($conn);
      ?>