<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>HOME</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link href="mainCSS.css" rel="stylesheet">
</head>

<body style="padding: 60px;">
    <div class='box'>
        <div class='wave -one'></div>
        <div class='wave -two'></div>
        <div class='wave -three'></div>
    </div>
      
    <div class="container-fluid fixed-top bg-dark">
        <nav class="navbar navbar-expand-md navbar-dark">
            <a class="navbar-brand" href="#" style="margin-left:20px;">MileStones</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="welcome.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">LogOut</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4" style=" position: relative; color: #344D67;">Turning Moments into Memories</h1>
            <p class="lead" style="position: relative;"><b>Sit back, relax, and let us take care of the details.</b> </p>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-4">
                    <img class="card-img-top" src="images/wedding.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Wedding Planner</h5>
                        <p class="card-text">We turn your special day into an extraordinary celebration of love and commitment.</p>
                        <a href="Page1.html" target="_parent">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <img class="card-img-top" src="images/Happy Birthday (1).png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Birthday Celebration</h5>
                        <p class="card-text"> Celebrate in style with our unforgettable birthday celebration services.</p>
                        <a href="Page2.html" target="_parent">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <img class="card-img-top" src="images/party.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Party Night</h5>
                        <p class="card-text">Let us bring your wildest party ideas to life for a night you will never forget this.</p>
                        <a href="Page3.html" target="_parent">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <img class="card-img-top" src="images/catering.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Catering</h5>
                        <p class="card-text">From bespoke menus to impeccable presentation, we ensure a flavoured journey that delights the taste buds. </p>
                        <a href="Page4.html" target="_parent">Read more...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer fixed-bottom" style="padding-top: 10px;">
        <div class="container text-center">
            <p>&copy; 2023 MileStones</p>
        </div>
    </footer>

</body>
</html>