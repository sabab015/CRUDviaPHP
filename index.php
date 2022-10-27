<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Office Task-2</title>
</head>

<body>
    <table class="container table table-striped table-dark mt-5">
        <?php
        $query = "SELECT * FROM content";
        $select_all_content_query = mysqli_query($connection, $query);
        ?>

        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($select_all_content_query)) {

                $id = $row['id'];

            ?>
                <tr>
                    <th scope="row"><?php echo $row['id'] ?></th>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['description'] ?></td>
                    <td><img style="width: 100px; height: 50px" class="img-responsive" src="images/<?php echo $row['image'] ?>" alt=""></td>

                    <td>
                        <a class="btn btn-primary" href="edit.php?id=<?php echo $id; ?>">Edit</a>
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $id; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>