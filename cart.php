<?php
session_start();
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">

        <div class="card">

            <h5 class="card-header info-color white-text text-center py-4">
                <strong>My Cart</strong>
            </h5>

            <div class="card-body px-lg-5 pt-0">


                <?php
                $uid = $_SESSION['uid'];
                $cartquery = "SELECT `id`, `username`, `item`, `image`, `price`, `count`, `category` FROM `cart` WHERE  userid = '$uid'";
                $result = mysqli_query($conn, $cartquery);
                $num = mysqli_num_rows($result);

                if ($num > 0) {
                    while ($cartitem = mysqli_fetch_array($result)) {

                ?>
                        <form class="md-form" style="color: #757575;" method="POST" action="update.php">
                            <div class="row">
                                <div class="col-md-6 mt-5">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>Item Name:</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <h6> <?php echo $cartitem['item'];
                                                    ?> </h6>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>Item Price:</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <h6>&#8377 <?php echo $cartitem['price']; ?> </h6>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>Item Quantity:</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <input class="form-control" name="quantity" type="number" style="max-width: 30%;" value="<?php echo $cartitem['count']; ?>">
                                            <input type="hidden" name="updateid" value="<?php echo $cartitem['id']; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <a class="btn btn-outline-danger btn-rounded my-4 waves-effect z-depth-0" href="delete.php?id=<?php
                                                                                                                                        echo $cartitem['id'];
                                                                                                                                        ?>">Delete Item</a>
                                    </div>

                                </div>
                                <div class="col-md-6 mt-2">
                                    <img class="img-fluid" src="img/<?php
                                                                    if ($cartitem['category'] == 1) {
                                                                        $catname = 'tv';
                                                                        echo $catname . "/" . $cartitem['image'];
                                                                    }
                                                                    if ($cartitem['category'] == 2) {
                                                                        $catname = 'mobiles';
                                                                        echo $catname . "/" . $cartitem['image'];
                                                                    }


                                                                    ?>">
                                </div>

                                <button class="btn btn-outline-info btn-rounded my-4 waves-effect z-depth-0" type="submit">Update Order</button>
                            </div>
                        </form>
                <?php
                    }
                }
                ?>
                <div class="row">
                    <div class="col-md-3">
                        <h5>Total Price:</h5>
                    </div>
                    <div class="col-md-3">
                        <h5>&#8377
                            <?php
                            $qry = "SELECT SUM(PRICE*COUNT) FROM CART WHERE USERID='$uid'";
                            $res = mysqli_query($conn, $qry);
                            $data = mysqli_fetch_array($res);
                            echo $data['SUM(PRICE*COUNT)'];
                            ?>
                        </h5>
                    </div>
                </div><br><br>

                <form class="md-form" style="color: #757575;" action="order.php" method="POST">
                    <h6>Enter your details</h6>

                    <input type="text" name="pin" class="form-control" placeholder="Enter your PIN"><br>

                    <input type="text" name="address" class="form-control" placeholder="Enter your Address"><br>

                    <input type="email" name="mail" class="form-control" placeholder="Enter your Mail"><br>

                    <input type="number" name="phone" class="form-control" placeholder="Enter your Contact Number"><br>

                    <input type="hidden" name="total" value="<?php echo $data['SUM(PRICE*COUNT)']; ?>">

                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Place Order</button>

                </form>

            </div>
        </div>

    </div>
</body>

</html>