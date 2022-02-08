<?php
session_start();
include "connect.php";

$pin = $_POST['pin'];
$address = $_POST['address'];
$mail = $_POST['mail'];
$total = $_POST['total'];
$mob = $_POST['phone'];
$user = $_SESSION['user'];

$qry1 = "SELECT * FROM CART WHERE USERNAME='$user'";
$res1 = mysqli_query($conn,$qry1);
$num = mysqli_num_rows($res1);
$arr = array();
if($num > 0){
    while ($data = mysqli_fetch_array($res1)) {
        $arr[] = $data['item'];
    }
}
$indata = implode(',',$arr);

$qry2 = "INSERT INTO `myorder`(`username`, `email`, `phone`, `address`, `pin`, `item`, `total`) VALUES ('$user', '$mail', '$mob', '$address', '$pin', '$indata', '$total')";
if(mysqli_query($conn,$qry2)) {
    echo'
    <script>
        alert("Order Placed Successfully!");
        window.location.href = "index2.php";
    </script>';
}
else {
    echo '
    <script>
        alert("Unable to place Order!");
        window.location.href = "cart.php";
    </script>';
}


?>