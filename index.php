<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js" defer></script>
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-4 col-lg-4 p-4 shadow mt-5 rounded border">
                <h1 class="h3 mb-4 text-center">Login</h1>
                <?php 
                    if(isset($_GET['incorrect'])):
                ?>
                <div class="alert alert-warning">
                    Incorret Email or Password
                </div>
                <?php endif ?>

                <form action="_action/login.php" method="post" class="mb-3">
                    <input type="email" name="email" class="form-control mb-3" placeholder="Enter Email....." id="" required>
                    <input type="password" name="password" class="form-control mb-3" placeholder="Password......" id="" required>
                    <button type="submit" class="btn btn-info w-100">Login</button>
                </form>
                <a href="register.php">Register</a>
            </div>
        </div>
    </div>
</body>
</html>