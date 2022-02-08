<?php  
session_start();
include "connect.php";

$updateid = $_POST['updateid'];
$quantity = $_POST['quantity'];

$query = "UPDATE cart SET `count`='$quantity' WHERE `id`='$updateid'";

if(mysqli_query($conn,$query)) {
    echo '<script>
        alert("Updated Successfully!");
        window.location.href = "cart.php";
    </script>';
}else {
    echo '<script>
        alert("Failed to update!");
        window.location.href = "cart.php";
    </script>';
}


?>