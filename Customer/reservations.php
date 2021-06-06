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
            <?php
            require ("header.php");

            if(!isset($_SESSION['id'])){ //if user didn't login, he/she can't see the this page
                header("Location:login.php");
                exit();
            }
            ?>
        </header>

    </div>

    <div class="container" style="padding-top:20px; padding-bottom: 10px; background-color: #E8EAEF"></div>

    <!--This is for content-->
    <div class="container" style="padding: 40px; border: 1px solid; margin-top: 70px; max-height: 800px; max-width: 980px; background-color: #FFFFFF">
        <div class="col" align="center" style="padding-bottom: 50px">
            <h2>Reservations</h2>
            <div class="row" align="left" style="margin-top:40px">
                <div class="col-4">
                    <div class="list-group">
                        <a href="profile_accountDetails.php" class="list-group-item list-group-item-action" aria-current="true">
                            Account Details
                        </a>
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">Reservations</a>
                        <a href="profile_changePassword.php" class="list-group-item list-group-item-action">Change Password</a>
                        <a href="profile_reviews.php" class="list-group-item list-group-item-action">Reviews</a>

                    </div>
                </div>
                <div class="col-8" style="padding-top: 10px; padding-left: 20px; border: 1px solid; overflow: auto; max-height: 400px">
                    <div class="row" style="border: 1px solid; margin-top:10px; margin-bottom: 10px">
                        <div class="col-4" style="padding-top: 13px">
                            <img src="../src/images/Vip-room.jpg" width="170px" height="120px">
                        </div>
                        <div class="col-4" style="padding-top: 10px">
                            <h6>Reservation Continues</h6>
                            <p>Vip Room</p>
                            <hr>
                            <p>15/04/2021 - 20/04/2021</p>
                            <hr>
                            <p>2 days left</p>
                        </div>
                        <div class="col-4" align="center" style="padding-top: 85px">
                            <a href="reservations_extendCancel.html">
                                <button class="btn btn-primary">Extend/Cancel</button>
                            </a>
                        </div>
                    </div>

                    <div class="row" style="border: 1px solid; margin-top:10px; margin-bottom: 10px">
                        <div class="col-4" style="padding-top: 13px">
                            <img src="../src/images/Vip-room.jpg" width="170px" height="120px">
                        </div>
                        <div class="col-4" style="padding-top: 10px">
                            <h6>Reservation Ended</h6>
                            <p>Double Room</p>
                            <hr>
                            <p>15/03/2021 - 15/03/2021</p>
                            <hr>
                            <p>Ended</p>
                        </div>
                        <div class="col-4" align="center" style="padding-top: 85px">
                            <a href="reservations_details.php">
                                <button class="btn btn-primary">See the Details</button>
                            </a>
                        </div>
                    </div>

                    <div class="row" style="border: 1px solid; margin-top:10px; margin-bottom: 10px">
                        <div class="col-4" style="padding-top: 13px">
                            <img src="../src/images/Vip-room.jpg" width="170px" height="120px">
                        </div>
                        <div class="col-4" style="padding-top: 10px">
                            <h6>Reservation Ended</h6>
                            <p>Double Room</p>
                            <hr>
                            <p>15/03/2021 - 15/03/2021</p>
                            <hr>
                            <p>Ended</p>
                        </div>
                        <div class="col-4" align="center" style="padding-top: 85px">
                            <a href="reservations_details.php">
                                <button class="btn btn-primary">See the Details</button>
                            </a>
                        </div>
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