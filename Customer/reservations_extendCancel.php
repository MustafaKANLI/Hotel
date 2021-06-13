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
            ?>
        </header>

    </div>

    <div class="container" style="padding-top:20px; padding-bottom: 10px; background-color: #E8EAEF"></div>
    <script>
        function submitForm(){
            document.getElementById("update").submit();
        }
    </script>
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
                        <a href="reservations.php" class="list-group-item list-group-item-action active">Reservations</a>
                        <a href="profile_changePassword.php" class="list-group-item list-group-item-action">Change Password</a>
                        <a href="profile_changePassword" class="list-group-item list-group-item-action">Reviews</a>
                        <a href="profile_messages.php" class="list-group-item list-group-item-action">Messages</a>

                    </div>
                </div>
                <div class="col-8" style="padding-top: 10px; padding-bottom: 10px; padding-left: 20px; border: 1px solid; overflow: auto; max-height: 400px">
                    <div class="row" style=" margin-top:10px; margin-bottom: 10px">
                        <div class="row">
                            <div class="col">
                                <h4>Reservation Continues</h4>
                            </div>
                            <div class="col" align="right">
                                <a href="reservations.php" align="right">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cancel" ></button>
                                </a>
                            </div>

                        </div>
                        <?php

                        $select = $conn -> query("SELECT * FROM reservations
                                                  WHERE customerid = '".$_SESSION["id"]."' AND checkindate = '".$_POST["checkindate"]."' AND doornumber = '".$_POST["doornumber"]."'
                                    

                                ");

                        $reservation = $select -> fetch_assoc();

                        ?>


                        <div class="row">
                            <div class="col-4" style="padding-top: 13px">
                                <img src="../src/images/Vip-room.jpg" width="170px" height="120px">
                            </div>
                            <div class="col-4" style="padding-top: 10px">

                                <p><?php echo $_POST["roomtype"];?> Room</p>
                                <hr>
                                <p><?php echo $_POST["doornumber"];?></p>
                                <hr>
                                <p><?php echo $_POST["checkindate"];?> <br> <?php echo $reservation['checkoutdate'];?></p>
                                <hr>
                                <p><?php echo $_POST["price"];?> USD</p>


                            </div>
                            <div class="col-4" align="center" style="padding-top: 85px">
                                <div class="mb-3">
                                    <form action="reservation_update.php" id="update" method="POST">
                                        <label for="dateInput" class="form-label">New Check-Out Date</label>
                                        <a>
                                            <input type="date" name="checkoutdate" class="form-control" id="dateInput">
                                            <input type="hidden" id="doornumber" name="doornumber" value="<?php echo $_POST["doornumber"]; ?>">
                                            <input type="hidden" id="checkindate" name="checkindate" value="<?php echo $_POST["checkindate"]; ?>">
                                            <input type="hidden" id="roomtype" name="roomtype" value="<?php echo $_POST["roomtype"]; ?>">
                                        </a>
                                    </form>

                                </div>

                            </div>
                        </div>

                        <div class="row" style="padding-bottom: 10px">
                            <div class="col" align="center">
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#cancellingAlert">Cancel the Reservation</button>
                                <!-- Modal -->
                                <div class="modal fade" id="cancellingAlert" tabindex="-1" aria-labelledby="cancelModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content" align="left">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="cancelModalLabel">Do You Want To Continue?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cancel" ></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                                    Your reservation will be cancelled!!!!
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col" align="center">
                                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#updatingAlert">Update the Reservation</button>
                                <!-- Modal -->
                                <div class="modal fade" id="updatingAlert" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content" align="left">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="updateModalLabel">Do You Want To Continue?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cancel" ></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                                    Your reservation will be extended!!!!
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button onClick="submitForm()" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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