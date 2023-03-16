<?php

include 'conn.php';

$id=$_GET['id'];

$delete_employee = "DELETE FROM `emp` WHERE `id`=$id";

$query = mysqli_query($conn,$delete_employee);

header('location:detail.php');

?>