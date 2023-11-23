<?php include_once 'dbcon.php'; ?>


<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM `Users`
            where UserID='$id'";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed: ' . mysqli_error($connection));
    }
}

$row = mysqli_fetch_assoc($result);

?>
<?php
if (isset($_POST['update_users'])) {
    $newname = $_POST['name'];
    $newemail = $_POST['email'];
    $newrole = $_POST['role'];
    $newsquad = $_POST['squad'];
    $query = "UPDATE `Users` SET `UserName`='$newname',`UserEmail`='$newemail',`UserRole`='$newrole',`SquadID`='$newsquad' WHERE `UserID`='$id'";
    if (mysqli_query($connection, $query)) {
        header('location:index.php?update_message=you havae');
    } else {
        echo "Error executing query: " . mysqli_error($connection);
    }
}
?>
<?php
include 'header.php';
?>
<main class="d-flex flex-column justify-content-center">

    <h1>modification de<?php echo $row['UserName']; ?></h1>
    <form class="w-75" action="update.php?id=<?php echo $id; ?>" method="post">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">UserName</label>
            <input type="text" class="form-control" value="<?php echo $row['UserName']; ?>" name="name" aria-describedby="emailHelp" />
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">UserEmail</label>
            <input type="text" value="<?php echo $row['UserEmail']; ?>" class="form-control" name="email" aria-describedby="emailHelp" />
            <div id="emailHelp" class="form-text">
                We'll never share your email with anyone else.
            </div>
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Role</label>
            <select name="role" class="form-select selectpicker">
                <option value="2" <?php echo ($row['UserRole'] == 2) ? 'selected' : ''; ?>>member</option>
                <option value="3" <?php echo ($row['UserRole'] == 3) ? 'selected' : ''; ?>>Leader</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Squad</label>
            <select id="disabledSelect" name="squad" class="form-select selectpicker">
                <option value="1" <?php echo ($row['SquadID'] == 1) ? 'selected' : ''; ?>>Brogrammers</option>
                <option value="2" <?php echo ($row['SquadID'] == 2) ? 'selected' : ''; ?>>ProDevs</option>
                <option value="3" <?php echo ($row['SquadID'] == 3) ? 'selected' : ''; ?>>CODEZILLA</option>
                <option value="4" <?php echo ($row['SquadID'] == 4) ? 'selected' : ''; ?>>cell13</option>
                <option value="5" <?php echo ($row['SquadID'] == 5) ? 'selected' : ''; ?>>Alpha</option>
            </select>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                Close
            </button>
            <input type="submit" name="update_users" value="modify" class="btn btn-primary" />
        </div>
    </form>
</main>