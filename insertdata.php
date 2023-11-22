<?php
include 'dbcon.php';

if (isset($_POST['add'])) {
    // Check if the required fields are set in the $_POST array
    if (isset($_POST['name'], $_POST['email'], $_POST['role'], $_POST['squad'])) {
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $role = mysqli_real_escape_string($connection, $_POST['role']);
        $squad = mysqli_real_escape_string($connection, $_POST['squad']);

        // Construct the SQL query
        $query = "INSERT INTO `Users` (`UserName`, `UserEmail`, `UserRole`, `SquadID`) VALUES ('$name', '$email', '$role','$squad')";

        // Execute the query
        if (mysqli_query($connection, $query)) {
            header('location:index.php?');
        } else {
            echo "Error executing query: " . mysqli_error($connection);
        }
    }
}
