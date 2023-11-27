<?php include 'dbcon.php'; ?>
<?php
include 'header.php';
?>

<body>


    <!-- az-header -->
    <main class="d-flex flex-column">
        <div class="d-flex w-75 justify-content-between my-3">
            <h1>all the users</h1>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Add new user
            </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="insertdata.php" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">UserName</label>
                                <input type="text" class="form-control" name="name" aria-describedby="emailHelp" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">UserEmail</label>
                                <input type="text" class="form-control" name="email" aria-describedby="emailHelp" />
                                <div id="emailHelp" class="form-text">
                                    We'll never share your email with anyone else.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Role</label>
                                <select name="role" class="form-select selectpicker">
                                    <option value="2">member</option>
                                    <option value="3">Leader</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Squad</label>
                                <select id="disabledSelect" name="squad" class="form-select selectpicker">
                                    <option value="1">Brogrammers</option>
                                    <option value="2">ProDevs</option>
                                    <option value="3">CODEZILLA</option>
                                    <option value="4">cell13</option>
                                    <option value="5">Alpha</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <input type="submit" name="add" value="add" class="btn btn-primary" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-bordered table-striped table-hover">
            <?php
            $query = "SELECT * FROM `Users`
            JOIN ROLES ON Users.UserRole=ROLES.RoleID
            LEFT JOIN Squads ON Users.SquadID=Squads.SquadID
            order by UserID";

            $result = mysqli_query($connection, $query);

            if (!$result) {
                die('Query failed: ' . mysqli_error($connection));
            }
            ?>
            <thead>
                <tr>
                    <!-- <th>ID</th> -->
                    <th>UserName</th>
                    <th>UserEmail</th>
                    <th>Role</th>
                    <th>Squad</th>
                    <th>Modify</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <!-- <td><?php echo $row['UserID']; ?></td> -->
                        <td><?php echo $row['UserName']; ?></td>
                        <td><?php echo $row['UserEmail']; ?></td>
                        <td><?php echo $row['RoleName']; ?></td>
                        <td><?php echo $row['SquadName']; ?></td>
                        <td>
                            <a href="update.php?id=<?php echo $row['UserID']; ?>" class="btn btn-success">Modify</a>
                        </td>
                        <td>
                            <a href="delete.php?id=<?php echo $row['UserID']; ?>" class="btn btn-danger">delete</a>
                        </td>

                    </tr>
                <?php
                }
                ?>
            </tbody>

        </table>
        <?php
        $sql = "SELECT * FROM Users";
        $result = $connection->query($sql);

        $totalRows = $result->num_rows;
        $sumColumn1 = 0;
        $sumColumn2 = 0;

        while ($row = $result->fetch_assoc()) {
            $sumColumn1 += $row['UserID'];
            $sumColumn2 += $row['UserRole'];
        }

        $averageColumn1 = $sumColumn1 / $totalRows;
        $averageColumn2 = $sumColumn2 / $totalRows;

        echo "Total d'utilisateur: $totalRows<br>";
        // echo "Average Column1: $averageColumn1<br>";
        // echo "Average Column2: $averageColumn2<br>";
        $connection->close();
        ?>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>