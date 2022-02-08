<?php
session_start();
include "connect.php";
$_SESSION['page'] = 'television';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Televisions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark mb-5 text-white">
        <h5 class="text-uppercase">Welcome
            <?php
            if (isset($_SESSION['user'])) {
                echo $_SESSION['user'];
            }
            ?>
        </h5>
    </nav>

    <div class="container">
        <div class="row">
            <?php
            $pquery = "SELECT `item_name`, `image`, `price` FROM item WHERE `category`='01' ORDER BY id ASC";
            $result = mysqli_query($conn, $pquery);
            $num = mysqli_num_rows($result);
            if ($num > 0) {
                while ($product = mysqli_fetch_array($result)) {
            ?>
                    <div class="col-md-3">
                        <form action="insert.php" method="POST">
                            <div class="card">
                                <h6 class="card-title text-center">
                                    <?php
                                    echo $product['item_name'];
                                    ?>
                                </h6>
                                <div class="card-body">
                                    <img src="img/tv/<?php echo $product['image'];  ?>" alt="smart tv" class="img-fluid">
                                    <input type="hidden" name="img" value="<?php echo $product['image']; ?>">
                                    <input type="hidden" name="itmname" value="<?php echo $product['item_name']; ?>">
                                    <input type="hidden" name="cat" value="1">
                                </div>
                                <h6 class="text-center">&#8377 <?php echo $product['price'] ?></h6>
                                <input type="hidden" name="price" value="<?php echo $product['price'] ?>">
                                <div class="row m-2">
                                    <div class="col-md-6 mt-2">
                                        <h6>Item count:</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" value="0" class="form-control" name="count">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Add to cart</button>
                            </div>
                        </form>
                    </div>

            <?php
                }
            }
            ?>
        </div>
        <a class="btn btn-info" href="
        <?php
        if (isset($_SESSION['user'])) {
            echo 'cart.php';
        }
        ?>">Go to cart</a>
        <a href="login.php">You must login to go to cart</a>
    </div>
</body>

</html>