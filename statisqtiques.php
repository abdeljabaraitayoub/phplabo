<?php include('dbcon.php');

$query = "SELECT count(Users) FROM Users";
$result = $result = mysqli_query($connection, $query);

include('header.php');
echo $result;
