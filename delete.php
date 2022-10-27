<?php include "db.php";
$id = $_REQUEST['id'];
$query = "DELETE FROM content WHERE id = $id ";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
header("Location: index.php");
?>

