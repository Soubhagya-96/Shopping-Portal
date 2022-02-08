<?php
session_start();
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shopping Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark mb-5 text-white">
        <ul class="navbar-nav">
            <li class="nav-item">
                <h5 class="text-uppercase">Welcome
                    <?php
                    echo $_SESSION['user'];
                    ?>
                </h5>
            </li>
            <li class="nav-item ml-5">
                <a href="<?php 
                    session_destroy();
                    session_unset();
                    echo "index.php";
                ?>" class="font-weight-bold text-white">Logout</a>
            </li>
        </ul>
    </nav>
    <br>
    <?php
    $getsql = "SELECT * FROM myorder";
    $res = mysqli_query($conn, $getsql);
    ?>
    <div class="container">
        <h4 class="text-center">Order Details</h4>
        <table>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>PIN</th>
                <th>Items</th>
                <th>Total Price</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
            ?>
                <tr>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['pin']; ?></td>
                    <td><?php echo $row['item']; ?></td>
                    <td><?php echo $row['total']; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>

</body>

</html>