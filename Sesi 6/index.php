<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="d-flex justify-content-between my-4">
            <h1>Movie List</h1>

            <a href="create.php" class="btn btn-primary">Add new Movies</a>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Studio</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include("connect.php");
                    $query = "SELECT * FROM movies";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)) { 
                ?>
                <tr>
                    <th scope="row"><?php echo $row['id'] ?></th>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['studio'] ?></td>
                    <td><?php echo $row['duration'] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">Edit</a>
                        <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>

                    </td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
            </table>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
