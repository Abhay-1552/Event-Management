<?php
error_reporting(0);
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $ShowAlert = false;
    $ShowError = false;
    include 'partials/dbconnect.php';
    $username = $_POST["username"];
    $email = $_POST["emailid"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `user` (`username`, `email`, `password`, `date`) 
        VALUES ('$username', '$email', '$password', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if($result){
            $ShowAlert = true;
        }
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
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="partials/signup.css">
</head>

<body style="background-color: #bfdfec;">
    <?php require 'partials/nav.php'?>
    <div class="container">
        <div class="signup-form">
            <h2>Sign Up</h2>
            <form method="post" action="signup.php">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password:</label>
                    <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm password" required>
                </div>
                <button type="submit" id="submit" class="btn btn-primary">Sign Up</button>
                <button type="button" class="btn btn-link" onclick="location.href='newlogin.html'">Login</button>
            </form>
        </div>
    </div>
    <?php
    if($ShowAlert){
        header('location: login.php');
    }
    if($ShowError){
        echo "<script>alert(' password do not match')</script>";
    }
 
    ?>
</body>

</html>
