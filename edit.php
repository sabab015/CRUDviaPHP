<?php include "db.php"; ?>

<?php
$id = $_REQUEST['id'];
$query = "SELECT * FROM content where id='" . $id . "'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="form container m-5">
        <p><a href="index.php">Home Page</a>
        <h4>Update Record</h4>
        <?php
        if (isset($_POST['new']) && ($_POST['new']) == 1) {
            $id = $_REQUEST['id'];
            $title = $_REQUEST['title'];
            $description = $_REQUEST['description'];
            $image = $_REQUEST['image'];

            $title = mysqli_real_escape_string($connection, $title);
            $description = mysqli_real_escape_string($connection, $description);

            $update = "UPDATE content set title='" . $title . "', description='" . $description . "' image='" . $image . "' where id='" . $id . "'";
            mysqli_query($connection, $update) or die(mysqli_error($connection));
        } else {
        ?>
            <div>
                <form name="form" method="post" action="">
                    <input type="hidden" name="new" value="1">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <p><input type="text" name="title" placeholder="Enter Title" required value="<?php echo $row['title'] ?>"></p>
                    <p><input type="text" name="description" placeholder="Enter Description" required value="<?php echo $row['description'] ?>"></p>
                    <img style="width: 500px; height: 500px" class="img-responsive" src="images/<?php echo $row['image'] ?>" alt="">
                    <input type="file" name="image" placeholder="Upload Images" src="" alt="">
                    <p><input class="btn btn-primary" name="submit" type="submit" value="Update" /></p>

                </form>
            <?php } ?>
            </div>
    </div>
</body>

</html>