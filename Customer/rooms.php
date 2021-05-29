<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Gallery</title>
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
        <h2>Rooms</h2>
    </div>

    <div class="container" style="padding: 20px; border: 1px solid; max-height: 980px; overflow:auto; background-color: #FFFFFF">
        <!--This is for the Vip Rooms-->
        <div class="row">
            <div class="col" align="center" style="margin-top: 20px">
                <div class="card" style="width: 66rem">
                    <div class="row">
                        <div class="col-5" style="padding:15px;margin-left: 10px">
                            <a href="galleryOnClicked.php">
                                <img src="../src/images/Vip-room.jpg" class="card-img-top" alt="..." height="270">
                            </a>

                        </div>

                        <div class="col-6">
                            <h4 class="card-title">Vip Rooms</h4>
                            <img src="../src/images/four-eight-stars.png" height="27px" width="151px">
                            <div style="margin-top: 40px" align="left">
                                <h6>Room Details</h6>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-check form-switch">

                                            <div class="col">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="cityView" checked disabled>
                                                <label class="form-check-label" for="cityView">
                                                    City/Sea View
                                                </label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="doubleBed" checked disabled>
                                                <label class="form-check-label" for="doubleBed">
                                                    Double Bed
                                                </label>
                                            </div>
                                            <div class="col">

                                                <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="shower" checked disabled>
                                                <label class="form-check-label" for="shower">
                                                    Shower
                                                </label>

                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="bathroom" checked disabled>
                                                <label class="form-check-label" for="bathroom">
                                                    Bathroom
                                                </label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="roomServices" checked disabled>
                                                <label class="form-check-label" for="roomServices">
                                                    Room Services
                                                </label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="balcony" checked disabled>
                                                <label class="form-check-label" for="balcony">
                                                    Balcony
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-6">

                                        <div class="form-check form-switch">
                                            <div class="col">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="satellite" checked disabled>
                                                <label class="form-check-label" for="satellite">
                                                    TV Channels
                                                </label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="wifi" checked disabled>
                                                <label class="form-check-label" for="wifi">
                                                    Free Wifi
                                                </label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="desk" checked disabled>
                                                <label class="form-check-label" for="desk">
                                                    Study Desk
                                                </label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="telephone" checked disabled>
                                                <label class="form-check-label" for="telephone">
                                                    Telephone
                                                </label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="minibar" checked disabled>
                                                <label class="form-check-label" for="minibar">
                                                    Mini Bar
                                                </label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="terrace" checked disabled>
                                                <label class="form-check-label" for="terrace">
                                                    Terrace
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 30px; margin-bottom:20px">
                                <h6>500 Usd/Day</h6>
                            </div>
                        </div>
                        <div class="col" align="center">
                            <a href="reservationPayment.html" class="btn btn-primary stretched-link"  >Book</a>
                        </div>

                    </div>


                    <div class="card-body">
                        <div class="col">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">Rate</th>
                                    <th scope="col">Text</th>
                                    <th scope="col">Customer</th>

                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                //include("../src/database/connect_db.php");

                                $select = "SELECT * FROM comments\n"

                                    . "WHERE roomtype = 'Vip'\n"


                                    . "ORDER BY rate ASC";
                                $result = $conn->query($select);





                                if($result -> num_rows>0){

                                    $selectCust = "SELECT * FROM customers\n"

                                        . "WHERE roomtype = 'Vip'\n"


                                        . "ORDER BY rate ASC";
                                    $resultCust = $conn->query($selectCust);

                                    while($select = $result->fetch_assoc()){

                                        echo '
                                              
                                            <tr>
                                            
                                                <td>'.$select["rate"].'</td>
                                                <td>'.$select["text"].'</td>
                                                <td>'.$select["customerid"].'</td>
                                                
                       
                                            </tr>
                                        ';
                                    }
                                }

                                ?>


                                </tbody>
                            </table>

                        </div>


                    </div>
                </div>
            </div>

            <!--This is for Family Rooms -->
            <div class="col" align="center" style="margin-top: 20px">
                <div class="card" style="width: 44rem">
                    <a href="galleryOnClicked.php">
                        <img src="../src/images/Vip-room.jpg" class="card-img-top" alt="..." height="370">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">Family Rooms</h4>
                        <img src="../src/images/four-eight-stars.png" height="27px" width="151px">
                        <div style="margin-top: 40px" align="left">
                            <h6>Room Details</h6>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check form-switch">

                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="cityView" checked disabled>
                                            <label class="form-check-label" for="cityView">
                                                City View
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="doubleBed" checked disabled>
                                            <label class="form-check-label" for="doubleBed">
                                                Double Bed
                                            </label>
                                        </div>
                                        <div class="col">

                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="shower" checked disabled>
                                            <label class="form-check-label" for="shower">
                                                Shower
                                            </label>

                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="bathroom" checked disabled>
                                            <label class="form-check-label" for="bathroom">
                                                Bathroom
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="roomServices" checked disabled>
                                            <label class="form-check-label" for="roomServices">
                                                Room Services
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="balcony" disabled>
                                            <label class="form-check-label" for="balcony">
                                                Balcony
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div class="form-check form-switch">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="satellite" checked disabled>
                                            <label class="form-check-label" for="satellite">
                                                TV Channels
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="wifi" checked disabled>
                                            <label class="form-check-label" for="wifi">
                                                Free Wifi
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="desk" checked disabled>
                                            <label class="form-check-label" for="desk">
                                                Study Desk
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="telephone" checked disabled>
                                            <label class="form-check-label" for="telephone">
                                                Telephone
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="minibar" checked disabled>
                                            <label class="form-check-label" for="minibar">
                                                Single Bed
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="terrace" disabled>
                                            <label class="form-check-label" for="terrace">
                                                Terrace
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 30px; margin-bottom:20px">
                            <h6>400 Usd/Day</h6>
                        </div>
                        <a href="reservationPayment.html" class="btn btn-primary stretched-link">Book</a>
                    </div>
                </div>
            </div>

            <!--This is for Double Rooms -->
            <div class="col" align="center" style="margin-top: 20px">

                <div class="card" style="width: 44rem">
                    <a href="galleryOnClicked.php">
                        <img src="../src/images/Vip-room.jpg" class="card-img-top" alt="..." height="370">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">Double Rooms</h4>
                        <img src="../src/images/four-eight-stars.png" height="27px" width="151px">
                        <div style="margin-top: 40px" align="left">
                            <h6>Room Details</h6>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check form-switch">

                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="cityView" checked disabled>
                                            <label class="form-check-label" for="cityView">
                                                City/Sea View
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="doubleBed" checked disabled>
                                            <label class="form-check-label" for="doubleBed">
                                                Double Bed
                                            </label>
                                        </div>
                                        <div class="col">

                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="shower" checked disabled>
                                            <label class="form-check-label" for="shower">
                                                Shower
                                            </label>

                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="bathroom" checked disabled>
                                            <label class="form-check-label" for="bathroom">
                                                Bathroom
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="roomServices" checked disabled>
                                            <label class="form-check-label" for="roomServices">
                                                Room Services
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="balcony"  disabled>
                                            <label class="form-check-label" for="balcony">
                                                Balcony
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-6">

                                    <div class="form-check form-switch">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="satellite" checked disabled>
                                            <label class="form-check-label" for="satellite">
                                                TV Channels
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="wifi" checked disabled>
                                            <label class="form-check-label" for="wifi">
                                                Free Wifi
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="desk" checked disabled>
                                            <label class="form-check-label" for="desk">
                                                Study Desk
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="telephone" checked disabled>
                                            <label class="form-check-label" for="telephone">
                                                Telephone
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="minibar"  disabled>
                                            <label class="form-check-label" for="minibar">
                                                Mini Bar
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="terrace"  disabled>
                                            <label class="form-check-label" for="terrace">
                                                Terrace
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 30px; margin-bottom:20px">
                            <h6>250 Usd/Day</h6>
                        </div>
                        <a href="reservationPayment.html" class="btn btn-primary stretched-link">Book</a>
                    </div>
                </div>
            </div>

            <!--This is for Single Rooms -->
            <div class="col" align="center" style="margin-top: 20px">

                <div class="card" style="width: 44rem" align="center">
                    <a href="galleryOnClicked.php">
                        <img src="../src/images/Vip-room.jpg" class="card-img-top" alt="..." height="370">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">Single Rooms</h4>
                        <img src="../src/images/four-eight-stars.png" height="27px" width="151px">
                        <div style="margin-top: 40px" align="left">
                            <h6>Room Details</h6>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check form-switch">

                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="cityView" checked disabled>
                                            <label class="form-check-label" for="cityView">
                                                City/Sea View
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="doubleBed" checked disabled>
                                            <label class="form-check-label" for="doubleBed">
                                                Single Bed
                                            </label>
                                        </div>
                                        <div class="col">

                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="shower" checked disabled>
                                            <label class="form-check-label" for="shower">
                                                Shower
                                            </label>

                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="bathroom" checked disabled>
                                            <label class="form-check-label" for="bathroom">
                                                Bathroom
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="roomServices" checked disabled>
                                            <label class="form-check-label" for="roomServices">
                                                Room Services
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="balcony"  disabled>
                                            <label class="form-check-label" for="balcony">
                                                Balcony
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-6">

                                    <div class="form-check form-switch">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="satellite" checked disabled>
                                            <label class="form-check-label" for="satellite">
                                                TV Channels
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="wifi" checked disabled>
                                            <label class="form-check-label" for="wifi">
                                                Free Wifi
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="desk" checked disabled>
                                            <label class="form-check-label" for="desk">
                                                Study Desk
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="telephone" checked disabled>
                                            <label class="form-check-label" for="telephone">
                                                Telephone
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="minibar"  disabled>
                                            <label class="form-check-label" for="minibar">
                                                Mini Bar
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="terrace"  disabled>
                                            <label class="form-check-label" for="terrace">
                                                Terrace
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 30px; margin-bottom:20px">
                            <h6>150 Usd/Day</h6>
                        </div>
                        <a href="reservationPayment.html" class="btn btn-primary stretched-link">Book</a>
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