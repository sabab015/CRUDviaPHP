<?php include "db.php";
    function showAllData(){
        global $connection;
        $query = "SELECT * FROM content";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die('Query FAILED');
        }
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            echo "<option value='$id'>$id</option>";
        }
    }

    function updateTable(){

        global $connection;
        $title = $_POST['title'];
        $description = $_POST['description'];
        $id = $_POST['id'];

        $query = "UPDATE content SET title = '$title', description = '$description' WHERE id = $id ";
        

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Query Failed" . mysqli_error($connection));
        }
    }

    function deleteRows(){

        global $connection;
        $title = $_POST['title'];
        $description = $_POST['description'];
        $id = $_POST['id'];

        $query = "DELETE FROM content WHERE id = $id ";
       

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Query Failed" . mysqli_error($connection));
        }
    }
?>
