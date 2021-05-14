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
        <h2>Home</h2>
    </div>

    <!--This is for content-->
    <div class="container" style="padding: 40px; border: 1px solid; background-color: #FFFFFF">
        <div class="row">
            <div class="col-3" style="padding-left:10px; padding-right: 10px">
                <div class="row" style="padding-top:30px; padding-bottom: 30px">
                    <img class="rounded" src="../src/images/Vip-room.jpg" width="180" height="150" />
                </div>
                <div class="row" style="padding-top:30px; padding-bottom: 30px">
                    <img class="rounded" src="../src/images/Vip-room.jpg" width="180" height="150" />
                </div>
                <div class="row" style="padding-top:30px; padding-bottom: 30px">
                    <img class="rounded" src="../src/images/Vip-room.jpg" width="180" height="150" />
                </div>
                <div class="row" style="padding-top:30px; padding-bottom: 30px">
                    <img class="rounded mx-auto d-block" src="../src/images/Vip-room.jpg" width="180" height="150" />
                </div>
            </div>

            <div class="col-3" style="vertical-align: center; padding-left: 50px; padding-right:50px">
                    <div class="row" style="padding-top:30px; margin-bottom: 120px">
                        <div class="row">
                            <button type="button" class="btn btn-primary">Vip Room</button>
                        </div>
                        <div class="row" style="padding-top: 15px">
                            <div class="col-7">
                                <p>500 Usd/Day</p>
                            </div>
                            <div class="col">
                                <p>4.8 rate</p>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 120px">
                        <div class="row">
                            <button type="button" class="btn btn-primary">Family Room</button>
                        </div>
                        <div class="row" style="padding-top: 15px">
                            <div class="col-7">
                                <p>400 Usd/Day</p>
                            </div>
                            <div class="col">
                                <p>4.8 rate</p>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 120px">
                        <div class="row">
                            <button type="button" class="btn btn-primary">Double Room</button>
                        </div>
                        <div class="row" style="padding-top: 15px">
                            <div class="col-7">
                                <p>300 Usd/Day</p>
                            </div>
                            <div class="col">
                                <p>4.8 rate</p>
                            </div>
                        </div>
                    </div>
                <div class="row" style="padding-bottom: 50px">
                    <div class="row">
                        <button type="button" class="btn btn-primary">Single Room</button>
                    </div>
                    <div class="row" style="padding-top: 15px">
                        <div class="col-7">
                            <p>150 Usd/Day</p>
                        </div>
                        <div class="col">
                            <p>4.8 rate</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-3">
                <div class="row">
                    <div class="row" style="padding-top: 30px ;margin-bottom: 140px">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select Room Types</option>
                            <option value="1">Vip Room</option>
                            <option value="2">Family Room</option>
                            <option value="3">Double Room</option>
                            <option value="3">Single Room</option>
                        </select>

                    </div>
                    <div class="row">
                        <!--This is for select check in date-->
                        <label for="dateInput" class="form-label">Check-in Date</label>
                        <input type="date" class="form-control" id="dateInput">
                    </div>
                </div>

            </div>
            <div class="col-3">
                <div class="row">
                    <div class="row" style="padding-top: 30px ;margin-bottom: 140px">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select Number Of Person</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3-4</option>
                        </select>

                    </div>
                    <div class="row">
                        <!--This is for select check out date-->
                        <label for="dateInput1" class="form-label">Check-out Date</label>
                        <input type="date" class="form-control" id="dateInput1">
                    </div>
                    <div class="row" align="right" style="padding-top: 450px">
                        <a href="reservationPayment.html">
                            <button class="btn btn-secondary" style="padding-left: 55px; font-size: 22px; padding-right: 55px">Book</button>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="container" style="padding-top:30px; padding-bottom: 10px"></div>

    <div class="container" align="right" style="padding-top: 40px; padding-bottom: 30px; padding-right: 30px; background-color: #313642">
        <footer>
            <a href="https://github.com/MustafaKANLI" target="_blank" style="color: #f3f4ed">Made by Mustafa Nur KANLI</a>
        </footer>
    </div>
</div>
</body>
</html>

<?php
    include("../src/database/connect_db.php");
?>