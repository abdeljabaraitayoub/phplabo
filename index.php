<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('dbcon.php'); ?>
    <!-- <?php include('dbcon.php'); ?> -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header class="d-flex justify-content-center">
        <h1 class="fs-1">CRUD project</h1>
    </header>
    <main class="d-flex flex-column ">
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
                                <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">UserEmail</label>
                                <input type="text" class="form-control" name="email" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Role</label>
                                <option>2</option>
                                <option>3</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Squad</label>
                                <select id="disabledSelect" name="squad" class="form-select selectpicker">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="submit" name="add" value="add" class="btn  btn-primary">
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
                    <th>ID</th>
                    <th>UserID</th>
                    <th>UserEmail</th>
                    <th>Role</th>
                    <th>Squad</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['UserID']; ?></td>
                        <td><?php echo $row['UserName']; ?></td>
                        <td><?php echo $row['UserEmail']; ?></td>
                        <td><?php echo $row['RoleName']; ?></td>
                        <td><?php echo $row['SquadName']; ?></td>
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