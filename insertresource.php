<?php
include 'dbcon.php';

if (isset($_POST['add'])) {
    // Check if the required fields are set in the $_POST array
    if (isset($_POST['ResourceName'], $_POST['SubcategoryID'], $_POST['projectID'])) {
        $resourceName = mysqli_real_escape_string($connection, $_POST['ResourceName']);
        $subcategoryID = mysqli_real_escape_string($connection, $_POST['SubcategoryID']);
        $projectID = mysqli_real_escape_string($connection, $_POST['projectID']);

        // Construct the SQL query
        $query = "INSERT INTO `Ressources` (`ResourceName`, `SubcategoryID`, `projectID`) VALUES ('$resourceName', '$subcategoryID', '$projectID')";

        // Execute the query
        if (mysqli_query($connection, $query)) {
            header('location:resources.php?');
        } else {
            echo "Error executing query: " . mysqli_error($connection);
        }
    }
}
