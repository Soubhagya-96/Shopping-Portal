<?php

session_start();
include "connect.php";

$uname = $_POST['username'];
$pw = $_POST['password'];

$log = "SELECT * FROM user WHERE username = '$uname' AND password = '$pw'";

$logsql = mysqli_query($conn,$log);

$fetch = mysqli_fetch_array($logsql);

$count = mysqli_num_rows($logsql);

if($count == 1) {
    if($_SESSION['page'] == 'phone') {

        $_SESSION['uid'] = $fetch['id'];
        $_SESSION['user'] = $fetch['username'];
        header("location: phone.php");
    }
    if($_SESSION['page'] == 'television') {

        $_SESSION['uid'] = $fetch['id'];
        $_SESSION['user'] = $fetch['username'];
        header("location: television.php");
    }
}
else {
    echo '<script>alert("Invalid username or password!");
    window.location.href = "login.php"</script>';
}

?>