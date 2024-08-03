<?php
session_start();
if ($_POST) {
    $txtUser = $_POST['user'] ?? "";
    $txtPass = $_POST['pass'] ?? "";

    if ($txtUser && $txtPass) {
        $_SESSION['user']='root';
        header("location:index.php");
    } else {
        echo "<script> alert('Fill all fields');</script>";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Login to your Session
                </div>
                <div class="card-body">
                    <form action="login.php" method="post">
                        <label for="user">User</label>
                        <input class="form-control" type="text" name="user" id="txtUser"><br>
                        <label for="pass">Password</label>
                        <input class="form-control" type="password" name="pass" id="txtPass"><br>
                        <button type="submit" class="btn btn-success">Login</button>
                    </form>
                </div>
                <div class="card-footer text-muted">
                    <p>Don't have an account? <a href="signup.php">Register Here!</a></p>
                </div>
            </div>

        </div>
        <div class="col-md-4">

        </div>
    </div>

</div>
</body>
</html>