<?php include "db.php"; ?>
<?php include "functions.php"; ?>


<?php
if (isset($_POST['submit'])) {
    deleteRows();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Delete Your Contents</h1>
        <form action="content_delete.php" method="POST">
            <div class="form-group mt-5 font-weight-bold">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Type your title here">
            </div>
            <div class="form-group font-weight-bold">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Write your description here"></textarea>
            </div>
            <div class="form-group">
                <select name="id" id="">
                    <?php
                    showAllData();
                    ?>
                </select>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Delete">
        </form>
    </div>
    <!-- <div class="container">
        <form action="login_delete.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">
                <select name="id" id="">
                    <?php
                    showAllData();
                    ?>

                </select>

            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Delete">
        </form>
    </div> -->
</body>

</html>