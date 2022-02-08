<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        .card {
            max-width: 40%;
            margin-top: 5%;
            margin-left: 25%;
        }
    </style>
</head>

<body>

    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Sign in</strong>
        </h5>

        <div class="card-body px-lg-5 pt-0">

            <form class="md-form" style="color: #757575;" action="login_submit.php" method="POST">

                <br>
                <label for="input">Username</label>
                <input type="text" class="form-control" name="username">
                <br>
                <label for="materialLoginFormPassword">Password</label>
                <input type="password" class="form-control" name="password">




                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

            </form>
        </div>
    </div>

</body>

</html>