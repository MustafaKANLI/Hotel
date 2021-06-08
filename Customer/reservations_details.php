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
                        <a href="profile_reviews.php" class="list-group-item list-group-item-action">Reviews</a>

                    </div>
                </div>
                <div class="col-8" style="padding-top: 10px; padding-bottom: 10px; padding-left: 20px; border: 1px solid; overflow: auto; max-height: 400px">
                    <div class="row" style="margin-top:10px; margin-bottom: 10px">
                        <div class="row">
                            <div class="col">
                                <h3>Reservation Details</h3>
                            </div>
                            <div class="col" align="right">
                                <a href="reservations.php" align="right">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cancel" ></button>
                                </a>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-5">
                                <img src="../src/images/Vip-room.jpg" width="180" height="120">
                            </div>
                            <div class="col-7" style="overflow:auto; max-height: 200px">
                                <p>
                                    This room has; city and sea view, fhd
                                    tv and premium satellite channels,
                                    double bed, single bed, free wifi, shower,
                                    bathroom telephone, premium room
                                    services, mini bar, balcony, terrace
                                </p>
                            </div>
                        </div>
                        <div style="padding-bottom:20px"></div>
                        <!--This is for details of reservation like an table-->
                        <div class="row" style="padding-left: 15px; padding-right:15px">
                            <h5>Details</h5>
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th scope="row">Names</th>
                                    <th scope="row">Values</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td scope="col">Check-in Date</td>
                                    <td scope="col"><?php echo $_POST["checkindate"];?></td>
                                </tr>
                                <tr>
                                    <td scope="col">Check-out Date</td>
                                    <td scope="col"><?php echo $_POST["checkoutdate"];?></td>
                                </tr>
                                <tr>
                                    <td scope="col">Room Type</td>
                                    <td scope="col"><?php echo $_POST["roomtype"];?> Room</td>
                                </tr>
                                <tr>
                                    <td scope="col">Door Number</td>
                                    <td scope="col"><?php echo $_POST["doornumber"];?></td>
                                </tr>
                                <tr>
                                    <td scope="col">Price</td>
                                    <td scope="col"><?php echo $_POST["price"];?> Usd</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row" style="padding-left: 280px">
                            <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deletingAlert">Delete the Reservation</button>
                            <!-- Modal -->
                            <div class="modal fade" id="deletingAlert" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content" align="left">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Do You Want To Continue?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cancel" ></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                Your reservation will be deleted!!!!
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