<?php
include_once 'dbcon.php';

if (isset($_GET['ResourceID'])) {
    $ResourceID = $_GET['ResourceID'];
    $query = "SELECT * FROM `Ressources` LEFT JOIN Project ON Ressources.ResourceID=Project.SquadID JOIN Subcategory on Ressources.SubcategoryID=Subcategory.SubcategoryID
            where ResourceID='$ResourceID'";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed: ' . mysqli_error($connection));
    }

    $row = mysqli_fetch_assoc($result);
}

if (isset($_POST['update_resource'])) {
    $newname = $_POST['ResourceName'];
    $newSubcategory = $_POST['SubcategoryID'];
    $newprojectID = $_POST['projectID'];
    $query = "UPDATE `Ressources` SET `ResourceName`='$newname',`SubcategoryID`='$newSubcategory',`projectID`='$newprojectID' WHERE `ResourceID`='$ResourceID'";
    if (mysqli_query($connection, $query)) {
        header('location:resources.php?update_message=you havae');
    } else {
        echo "Error executing query: " . mysqli_error($connection);
    }
}

include 'header.php';
?>
<main class="d-flex flex-column justify-content-center">
    <h1>modification de<?php echo $row['ResourceID']; ?></h1>
    <form class="w-75" action="updateresource.php?ResourceID =<?php echo $ResourceID; ?>" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ResourceName</label>
            <input type="ResourceName" class="form-control" value="<?php echo $row['ResourceName']; ?>" name="ResourceName" aria-describedby="emailHelp" />
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Subcategory</label>
            <select name="SubcategoryID" class="form-select selectpicker">
                <option value="1" <?php echo ($row['SubcategoryID'] == 1) ? 'selected' : ''; ?>>Agile Methodology</option>
                <option value="2" <?php echo ($row['SubcategoryID'] == 2) ? 'selected' : ''; ?>>Task Tracking</option>
                <option value="3" <?php echo ($row['SubcategoryID'] == 3) ? 'selected' : ''; ?>>Web Development</option>
                <option value="4" <?php echo ($row['SubcategoryID'] == 4) ? 'selected' : ''; ?>>Agile Methodology</option>
                <option value="5" <?php echo ($row['SubcategoryID'] == 5) ? 'selected' : ''; ?>>Task Tracking</option>
                <option value="6" <?php echo ($row['SubcategoryID'] == 6) ? 'selected' : ''; ?>>Web Development</option>
                <option value="7" <?php echo ($row['SubcategoryID'] == 7) ? 'selected' : ''; ?>>Mobile App Development</option>
                <option value="8" <?php echo ($row['SubcategoryID'] == 8) ? 'selected' : ''; ?>>Social Media Marketing</option>
                <option value="9" <?php echo ($row['SubcategoryID'] == 9) ? 'selected' : ''; ?>>Content Marketing</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">project</label>
            <select id="disabledSelect" name="projectID" class="form-select selectpicker">
                <option value="1" <?php echo ($row['ProjectName'] == 1) ? 'selected' : ''; ?>>1st-brief</option>
            </select>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                Close
            </button>
            <input type="submit" name="update_resource" value="update" class="btn btn-primary" />
        </div>
    </form>
</main>