<?php
include('dbcon.php');
?>
<?php
if (isset($_GET['id'])) {
    $ID = $_GET['id'];
    $query = "DELETE FROM Category WHERE CategoryID = '$ID'";
    $result = mysqli_query($connection, $query);
    if ($result) {
        header('location:categories.php?success=1');
    } else {
        echo "Error executing query: " . mysqli_error($connection);
    }
}
?>