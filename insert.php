<?php
session_start();
include "connect.php";

$itemname = $_POST['itmname'];
$itemimage = $_POST['img'];
$itemcount = $_POST['count'];
$itemprice = $_POST['price'];
$category = $_POST['cat'];

if(isset($_SESSION['user'])) {

    $user = $_SESSION['user'];
    $id = $_SESSION['uid'];
    $inqry = "INSERT INTO cart (`userid`, `username`, `item`, `image`, `price`, `count`, `category`) VALUES ('$id', '$user', '$itemname', '$itemimage', '$itemprice', '$itemcount', '$category')";
    if(mysqli_query($conn,$inqry)) {
        if($_SESSION['page'] == 'phone') {
            echo '<script>
            alert("Database updated successfully!");
            window.location.href = "phone.php";
            </script>';
        }
        if($_SESSION['page'] == 'television') {
            echo '<script>
            alert("Database updated successfully!");
            window.location.href = "television.php";
            </script>';
        }
    }else {
        if ($_SESSION['page'] == 'phone') {
            echo '<script>
            alert("Failed to update Database!");
            window.location.href = "phone.php";
            </script>';
        }
        if ($_SESSION['page'] == 'television') {
            echo '<script>
            alert("Failed to update Database!");
            window.location.href = "television.php";
            </script>';
        }
    }
    
    // echo '<script>window.location.href = "phone.php"</script>';
}
else {
    echo '<script>
        alert("You must login to continue!");
        window.location.href = "login.php";
    </script>';
    exit();
}
?>