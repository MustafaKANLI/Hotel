<?php
    session_start();

    $loginText = "Login/Signup";
    $loginLink = "login.php";

    if(isset($_SESSION["logged_in"])) {
        $logged_in = $_SESSION["logged_in"];
        $loginText = "Mustafa KANLI";
        $loginLink = "userdashboard.php";
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Home</title>
</head>
<body style="background-color: #F4F6FC">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<div class="container" style="background-color:#E8EAEF">
    <!--This is for Header, navbar-->
    <div class="container shadow-sm p-3 mb-5 bg-body rounded" style="background-color: #f3f4ed">
        <header class="header">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <img src="../src/images/logo.png" alt="" width=50 height="30">
                        Paradis Hotel

                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse"  id="navbarSupportedContent">
                        <div class="col" align="left">
                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="index.php" aria-disabled="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gallery.html">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="rooms.php">Rooms</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="reservations.html">Reservations</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="login.php"><img src="../src/images/profile.png" width="35px" height="35px"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </nav>
        </header>

    </div>

    <div class="container" style="padding-top:20px; padding-bottom: 10px; background-color: #E8EAEF">

    </div>



    <div class="container" align="right" style="padding-top: 40px; padding-bottom: 30px; padding-right: 30px; background-color: #313642">
        <footer>
            <a href="https://github.com/MustafaKANLI" target="_blank" style="color: #f3f4ed">Made by Mustafa Nur KANLI</a>
        </footer>
    </div>


</div>
</body>
</html>