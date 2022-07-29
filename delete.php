<?php

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `course_table` WHERE id = $id ";

mysqli_query($con, $q);

header('location:index.php');

?>