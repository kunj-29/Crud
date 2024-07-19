<?php
include("connection.php");
$id = $_GET['id'];

$query = "DELETE FROM form WHERE id='$id'";
$data = mysqli_query($conn, $query);

if($data){
    echo "<script>alert('Record deleted')</script>";
    ?>

    <meta http-equiv = "refresh" content = "0; url = http://localhost:8080/crud/display.php"/>

    <?php
    header("location:display.php");
}
else{
    echo "<script>alert('Failed to delete')</script>";
}
?>