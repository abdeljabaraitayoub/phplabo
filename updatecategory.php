<?php
include_once 'dbcon.php';

if (isset($_GET['id'])) {
    $CategoryID = $_GET['id'];
    $query = "SELECT * FROM `Category`
            where CategoryID='$CategoryID'";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed: ' . mysqli_error($connection));
    }

    $row = mysqli_fetch_assoc($result);
}

if (isset($_POST['update_category'])) {
    $newname = $_POST['CategoryName'];
    $query = "UPDATE `Category` SET `CategoryName`='$newname' WHERE `CategoryID`='$CategoryID'";
    if (mysqli_query($connection, $query)) {
        header('location:categories.php?update_message=you havae');
    } else {
        echo "Error executing query: " . mysqli_error($connection);
    }
}

include 'header.php';
?>
<main class="d-flex flex-column justify-content-center">
    <h1>modification de<?php echo $row['CategoryName']; ?></h1>
    <form class="w-75" action="updatecategory.php?id=<?php echo $CategoryID; ?>" method="post">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">CategoryName</label>
            <input type="CategoryName" class="form-control" value="<?php echo $row['CategoryName']; ?>" name="CategoryName" aria-describedby="emailHelp" />
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                Close
            </button>
            <input type="submit" name="update_category" value="update" class="btn btn-primary" />
        </div>
    </form>
</main>