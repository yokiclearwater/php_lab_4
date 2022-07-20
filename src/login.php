<?php
include 'config.php';
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    // $sql = "SELECT * FROM users WHERE email=? AND password=?";

    // $stmt = $conn->prepare($sql);
    // $stmt->bindValue(1, $email, PDO::PARAM_STR);
    // $stmt->bindValue(2, $password, PDO::PARAM_STR);
    // $stmt->execute();
    // $result = $stmt->fetchAll();
    $query = $fluent->from('users')->where('email',$email)->where('password',$password);
    $result = $query->fetchAll();

    if ($result) {
        $row = $result[0];
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['major'] = $row['major'];
        header("Location: index.php");
    } else {
        echo "<script> alert('Email or Password is Wrong!') </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 pt-5">
        <div class="col-10 col-md-6 col-lg-4 m-auto">
            <div class="card border-5px shadow">
                <div class="card-body">
                    <h2 class="text-muted ms-1"> Login </h2>
                    <form action="" method="POST">
                        <input type="email" name="email" id="" class="form-control my-4 py-2" placeholder="Email" required>
                        <input type="password" name="password" id="" class="form-control my-4 py-2" placeholder="Password" required>
                        <div class="text-center mt-3">
                            <button name="submit" class="btn btn-secondary mb-3"> Login</button><br>

                            Don't have an acconunt?
                            <a href="register.php" class=" nav-link link-primary ">Register Here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>