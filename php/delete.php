<?php 
session_start();
include "connect.php";

$id = $_GET['id'];

$query = "DELETE FROM cart WHERE `id`='$id'";

if(mysqli_query($conn,$query)) {
    echo '<script>
        alert("Item Deleted!");
        window.location.href = "cart.php";
    </script>';
}else {
    echo '<script>
        alert("Failed to delete!");
        window.location.href = "cart.php";
    </script>';
}

?>