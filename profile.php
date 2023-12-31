<?php 
    include('vendor/autoload.php');

    use Helpers\Auth;
    $auth=Auth::check();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js" defer></script>
</head>
<body>
    <div class="container mt-4" style="max-width: 800px;">
        <h1 class="h3 mb-4">User Profile</h1>
        <?php if(isset($_GET['error'])): ?>
            <div class="alert alert-warning mb-3">Something went Wrong</div>
        <?php endif ?>
        <?php if($auth->photo): ?>
            <img src="_action/photos/<?= $auth->photo ?>" alt="Photo" class=" img-thumbnail mb-3 w-50">
        <?php endif ?>
        
        <form class=" input-group mb-3" action="_action/upload.php" enctype="multipart/form-data" method="post">
            <input class="form-control" type="file" name="photo" id="">
            <input class="btn btn-info" type="submit" value="Upload">
        </form>
        <ul class=" list-group mb-4">
            <li class=" list-group-item">Name: <?= $auth->name ?></li>
            <li class=" list-group-item">Email: <?= $auth->email ?></li>
            <li class=" list-group-item">Phone: <?= $auth->phone ?></li>
            <li class=" list-group-item">Address: <?= $auth->address ?></li>
        </ul>
        <a href="_action/logout.php" class="text-danger">Log Out</a>
    </div>
</body>
</html>