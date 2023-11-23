<?php
include('dbcon.php');
?>
<?php
if (isset($_GET['id'])) {
    $ID = $_GET['id'];
    $query = "DELETE FROM `Ressources` WHERE ResourceID = '$ID'";
    $result = mysqli_query($connection, $query);
    if ($result) {
        header('location:resources.php?success=1');
    } else {
        echo "Error executing query: " . mysqli_error($connection);
    }
}
?>