<?php
if (isset($_GET['id'])) {
    include('../config/config.php');
    $id=$_GET['id'];
    $delete = "DELETE FROM phiendaugia WHERE MaPhien='$id'";

    if (mysqli_query($conn, $delete)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    header("location:auction.php");


    mysqli_close($conn);
}
?>
