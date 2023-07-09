<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div style="max-width: 600px;" class="container my-4">
        <h1 class="h3 mb-3 text-center">Register</h1>
        <form action="_action/create.php" method="post">
            <div class="mb-3">
                <label class="form-label" for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name" placeholder="Enter Name" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email" placeholder="Enter Email" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="phone">phone</label>
                <input class="form-control" type="text" name="phone" id="phone" placeholder="Enter Phone Number" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="address">Address</label>
                <input class="form-control" type="text" name="address" id="address" placeholder="Enter Address" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password" placeholder="Enter Password" required>
            </div>
            <button type="submit" class="btn btn-success mb-3">Register</button>
            <div class="text-center">
               <span>Do You have Account? <a href="index.php"> Login</a></span>
            </div>

        </form>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>