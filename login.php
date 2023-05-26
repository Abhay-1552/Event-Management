<?php
error_reporting(0);
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $login = false;
    $ShowError = false;
    include 'partials/dbconnect.php';
    $email = $_POST["email"];
    $password = $_POST["password"];

        $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if($num == 1){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            header("location: welcome.php");
        }

    else{
        $ShowError = true;
    }

}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="partials/login.css">
</head>

<body style="background-color: #bfdfec;">
    <?php require 'partials/nav.php'?>
    <div class="container">
        <div class="login-form">
            <h2>Login</h2>
            <form method="post" action="login.php" >
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                </div>
                <button type="submit" id="submit" class="btn btn-primary">Login</button>
                <button type="button" class="btn btn-link" onclick="location.href='signup.php'">Sign Up</button>
            </form>
        </div>
    </div>
    <?php
    if($login){
        echo ' <div>
        <h2>successfully </h2>
        <h3> you are login</h3>
    </div>';
    }
    if($ShowError){
        echo '<script>alert("Your Email or Password is incorrect!");</script>';
    }
 
    ?>
</body>

</html>