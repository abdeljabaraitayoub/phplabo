<?php
include 'dbcon.php';

if (isset($_POST['add'])) {
    // Check if the required fields are set in the $_POST array
    if (isset($_POST['name'])) {
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $query = "INSERT INTO Category (CategoryName) VALUES('$name')";


        if (mysqli_query($connection, $query)) {
            header('location:categories.php?');
        } else {
            echo "Error executing query: " . mysqli_error($connection);
        }
    }
}
