<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shopping Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container mt-5 mb-5 text-center">
        <h2 class="font-weight-bold">Gadget Store</h2>
        <h4>Your personal store to shop televisions and mobile phones</h4>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <form class="border border-light p-5" method="POST" action="category.php">

                    <p class="h4 mb-4 text-center">Enter your choice</p>

                    <input type="text" id="choice" class="form-control mb-4" placeholder="" name="choice">

                    <button class="btn btn-info btn-block my-4" type="submit">Submit</button>

                </form>
                <p class="text-center" style="color: green">The options available are television and phone</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <!-- image gallery -->

                <div class="gallery" id="gallery">

                    <div class="mb-3 pics animation all 2">
                        <img class="img-fluid" src="img/gallery/samsung.jpg" alt="samsung tv">
                    </div>

                    <div class="mb-3 pics animation all 1">
                        <img class="img-fluid" src="img/gallery/mi.jpg" alt="mi note 10">
                    </div>

                    <div class="mb-3 pics animation all 1">
                        <img class="img-fluid" src="img/gallery/oneplus.jpg" alt="one plus 8">
                    </div>

                    <div class="mb-3 pics animation all 2">
                        <img class="img-fluid" src="img/gallery/lg.jpg" alt="lg tv">
                    </div>

                    <div class="mb-3 pics animation all 2">
                        <img class="img-fluid" src="img/gallery/phillips.jpg" alt="phillips tv">
                    </div>

                    <div class="mb-3 pics animation all 1">
                        <img class="img-fluid" src="img/gallery/x2pro.jpg" alt="realme x2 pro">
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>