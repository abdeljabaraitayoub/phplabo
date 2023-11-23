<?php
include('dbcon.php');
?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM `Users` WHERE `UserID` = '$id'";
    $result = mysqli_query($connection, $query);
    if ($result) {
        header('location:index.php');
    } else {
        echo "Error executing query: " . mysqli_error($connection);
    }
}
?>