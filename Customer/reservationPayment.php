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
    <div class="container" style="padding-top:20px; padding-bottom: 10px; background-color: #E8EAEF">
        <h2>Booking Page</h2>
    </div>

    <?php

    $name = $surname = $email = $phone = "";

    if(isset($_SESSION['id'])){
        $name = $_SESSION['name'];
        $surname = $_SESSION['surname'];
        $email = $_SESSION['email'];
        $phone = $_SESSION['phone'];
    }


    function priceCalculator($checkIn, $checkOut, $roomtype){
        include("../src/database/connect_db.php");

        $selectPrice = $conn -> query("SELECT * FROM roomprices"
        ." WHERE roomtype = '".$roomtype."'");

        $price = $selectPrice -> fetch_assoc();

        $datetime1 = date_create("$checkOut");
        $datetime2 = date_create("$checkIn");

        $difference = date_diff($datetime1, $datetime2);

        return $difference->format('%d') * $price['price'];
    }

    ?>

    <!--This is for the content-->
    <div class="container" style="padding: 40px; border: 1px solid; background-color: #FFFFFF">
        <div class="row">
            <!--This is for Reservation Information-->
            <div class="col-lg-5" style="border: 1px solid; padding-left: 15px; margin-top:30px; padding-right: 15px; box-shadow: 4px 4px 2px 2px grey">
                <h3>Reservation Information</h3>
                <div class="row">
                    <div class="col-sm">
                        <img  src="../src/images/Vip-room.jpg" width="100% px" height="100% px">
                    </div>
                    <div class="col-sm" style="overflow:auto; max-height: 200px">
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
                                <td scope="col"> <?php echo($_SESSION["checkIn"]); ?> </td>
                            </tr>
                            <tr>
                                <td scope="col">Check-out Date</td>
                                <td scope="col"><?php echo($_SESSION["checkOut"]); ?></td>
                            </tr>
                            <tr>
                                <td scope="col">Door Number</td>
                                <td scope="col"><?php echo($_POST["doorNumber"]); ?></td>
                            </tr>
                            <tr>
                                <td scope="col">Room Type</td>
                                <td scope="col"><?php echo($_SESSION["roomtype"]); ?> Room</td>
                            </tr>
                            <tr>
                                <td scope="col">Price</td>
                                <td scope="col"><?php
                                    $totalPrice = priceCalculator($_SESSION['checkIn'], $_SESSION['checkOut'], $_SESSION['roomtype']);
                                    echo $totalPrice;
                                    ?> Usd</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-5" style="padding-left: 15px; padding-right: 40px; margin-top:30px; margin-left: 10px">
                <!-- This is for Customer Informations-->
                <div class="row" >
                    <h3>Customer Information</h3>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nameInput" class="form-label">Name</label>
                            <input type="text" class="form-control" id="nameInput" value="<?php echo $name; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="surnameInput" class="form-label">Surname</label>
                            <input type="text" class="form-control" id="surnameInput" value="<?php echo $surname; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="phoneInput" class="form-label">Phone Number</label>
                            <input type="phone" class="form-control" id="phoneInput" value="<?php echo $phone; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="mailInput" class="form-label">Mail</label>
                            <input type="email" class="form-control" id="mailInput" value="<?php echo $email; ?>">
                        </div>
                    </div>
                </div>
                <div style="padding: 30px"></div>
                <!-- This is for Payment Informations-->
                <div class="row" >
                    <h3>Payment Information</h3>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nameOnTheCardInput" class="form-label">Name on the card</label>
                            <input type="text" class="form-control" id="nameOnTheCardInput" placeholder="Name Surname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="cardNumberInput" class="form-label">Card Number</label>
                            <input type="text" class="form-control" id="cardNumberInput" placeholder="1111 2222 3333 4444">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="dateInput" class="form-label">Date</label>
                            <input type="month" class="form-control" id="dateInput" placeholder="04/26">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="cvvInput" class="form-label">Cvv/Cvc</label>
                            <input type="cvc" class="form-control" id="cvvInput" placeholder="123">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="padding: 20px"></div>
        <div class="row" align="right" >
            <div class="col 3" style="padding-right: 40px">
                <button type="button" class="btn btn-outline-secondary" style="padding-left:50px; padding-right:50px;
                    font-size:22px" href="#" data-bs-toggle="modal" data-bs-target="#bookingAlert">
                Book Now
                </button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="bookingAlert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" align="left">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Book</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cancel"></button>
                        </div>
                        <div class="modal-body">
                            <h6>Do You Want To Continue?</h6>
                            <p>
                                After this step, your reservation will be made!
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <a href="reservations.php">
                                <button type="submit" class="btn btn-primary">Ok</button>
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

<?php
if($_SESSION['id'] != "" and $_SESSION['checkIn'] != "" and $_SESSION['checkIn'] != "" and $_POST["doorNumber"] != ""){

    $add = $conn -> query("INSERT INTO reservations(`customerid`, `checkindate`, `checkoutdate`, `doornumber`, `totalprice`) 
                VALUES ('".$_SESSION['id']."','".$_SESSION['checkIn']."','".$_SESSION['checkOut']."','".$_POST["doorNumber"]."','".$totalPrice."')");

}

?>