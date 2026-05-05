<?php
include '../db.php';

if(isset($_GET['id'])){

$id = $_GET['id'];

$sql = "DELETE FROM questions WHERE id='$id'";

mysqli_query($conn,$sql);

echo "Question Deleted";
}
?>
