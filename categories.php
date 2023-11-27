<?php include 'dbcon.php'; ?>
<?php
include 'header.php';
?>

<body>


    <!-- az-header -->
    <main class="d-flex flex-column">
        <div class="d-flex w-75 justify-content-between my-3">
            <h1>all the categories</h1>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Add new categories
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
                        <form action="insertcategory.php" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Category name</label>
                                <input type="text" class="form-control" name="name" aria-describedby="emailHelp" />
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
            $query = "SELECT * FROM `Category`";

            $result = mysqli_query($connection, $query);

            if (!$result) {
                die('Query failed: ' . mysqli_error($connection));
            }
            ?>
            <thead>
                <tr>
                    <!-- <th>ID</th> -->
                    <!-- <th>CategoryID</th> -->
                    <th>Categories name</th>
                    <th>Modify</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <!-- <td><?php echo $row['CategoryID']; ?></td> -->
                        <td><?php echo $row['CategoryName']; ?></td>
                        <td>
                            <a href="updatecategory.php?id=<?php echo $row['CategoryID']; ?>" class="btn btn-success">Modify</a>
                        </td>
                        <td>
                            <a href="deleteCatgorie.php?id=<?php echo $row['CategoryID']; ?>" class="btn btn-danger">delete</a>
                        </td>

                    </tr>
                <?php
                }
                ?>
            </tbody>

        </table>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>