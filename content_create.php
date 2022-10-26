<?php include "db.php";
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $title = mysqli_real_escape_string($connection, $title);
    $description = mysqli_real_escape_string($connection, $description);


    $fileName = $_FILES["image"]["name"];
    
    $tempname = $_FILES["image"]["tmp_name"];
    $target_dir = "./images/".$fileName;
    
    move_uploaded_file($tempname, $target_dir);

    $query = "INSERT INTO content(title,description,image) ";
    $query .= "VALUES('$title','$description', '$fileName')";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
    }
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
        <h1 class="mt-5">Upload Your Contents</h1>
        <form action="content_create.php" method="POST" enctype="multipart/form-data">
            <div class="form-group mt-5 font-weight-bold">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Type your title here">
            </div>
            <div class="form-group font-weight-bold">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Write your description here"></textarea>
            </div>
            <div class="form-group mt-5 font-weight-bold">
                <label for="title">Image</label>
                <input type="file" name="image" class="form-control" id="exampleFormControlInput1" placeholder="Type your title here">
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Create">
        </form>
    </div>
</body>

</html>