<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Rooms</title>
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

        <div class="row">
            <div class="col-lg-3">
                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseComment" role="button" aria-expanded="false" aria-controls="collapseComment">
                    Make Comment
                </a>

                <div class="collapse" id="collapseComment" style="border: 1px solid; max-height: 300px; ">
                    <h5>Make an review</h5>
                    <form action="addComment.php" method="POST">
                        <div class="row">
                            <link rel="stylesheet" href="rate.css">
                            <div class="rate" name="rate">
                                <input type="radio" id="star5" name="rate" value="5" />
                                <label for="star5" title="5 stars">5 stars</label>
                                <input type="radio" id="star4" name="rate" value="4" />
                                <label for="star4" title="4 stars">4 stars</label>
                                <input type="radio" id="star3" name="rate" value="3" />
                                <label for="star3" title="3 stars">3 stars</label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="2 stars">2 stars</label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="1 star">1 star</label>
                            </div>
                        </div>
                        <div class="row" style="padding-top:30px">
                            <div class="form-floating">
                                <textarea class="form-control" name="text" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Comment</label>
                            </div>
                        </div>
                        <div class="row" style="padding-left: 80px; padding-right: 15px; padding-top: 30px; padding-bottom:15px">

                            <button type="submit" class="btn btn-primary">Make Review</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--This is for the Vip Rooms-->
        <div class="row">
            <div class="col" align="center" style="margin-top: 20px; ">
                <div class="card" style="width: 66rem; box-shadow: 3px 3px 3px 3px #777777">
                    <div class="row">
                        <div class="col-5" style="padding:15px;margin-left: 10px">
                            <a href="gallery.php">
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

                    </div>
                    <?php
                    $selectVip = "SELECT * FROM comments\n"
                        . "INNER JOIN Customers\n"
                        . "ON Customers.id = comments.customerid\n"
                        . "WHERE roomtype = 'Vip'\n"
                        . "ORDER BY rate DESC";
                    $result = $conn->query($selectVip);


                    ?>

                    <div class="card-body">
                        <div class="col" style="max-height: 400px; overflow: auto; overflow-x: hidden">

                           <?php $selectVip = $result->fetch_assoc();//Firstly show one comment  ?>
                            <div class="row" style="border: 1px solid; padding-left: 15px; margin-top: 10px; margin-bottom:10px">
                                <div class="col-2" style="padding-top: 10px">
                                    <?php echo $selectVip["rate"]; ?>
                                </div>
                                <div class="col-6" style="padding-top:10px">
                                    <div class="row" align="left">
                                        <p>
                                            <?php echo $selectVip["text"]; ?>
                                        </p>

                                    </div>
                                    <div class="row" style="padding-top:15px">
                                        <div class="col-2" align="right">
                                            <button class="btn"><i class="fa fa-thumbs-up"></i></button>
                                        </div>
                                        <div class="col-2" align="left">
                                            <button class="btn"><i class="fa fa-thumbs-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4" align="center" style="padding-top: 30px">
                                    <img src="../src/images/profile_black.png" width="70" height="70">
                                    <h6><?php echo ($selectVip["fname"]." ".$selectVip["lname"]); ?></h6>
                                </div>

                            </div>

                            <div class="row" >
                                <a data-bs-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Show more comment...
                                </a>
                            </div>

                            <?php
                            while($selectVip = $result->fetch_assoc()){
                            ?>
                            <div class="row collapse" id="collapse1"style="border: 1px solid; padding-left: 15px; margin-top: 10px; margin-bottom:10px">
                                <div class="col-2" style="padding-top: 10px">
                                    <?php echo $selectVip["rate"]; ?>
                                </div>
                                <div class="col-6" style="padding-top:10px">
                                    <div class="row" align="left">
                                        <p>
                                            <?php echo $selectVip["text"]; ?>
                                        </p>

                                    </div>
                                    <div class="row" style="padding-top:15px">
                                        <div class="col-2" align="right">
                                            <button class="btn"><i class="fa fa-thumbs-up"></i></button>
                                        </div>
                                        <div class="col-2" align="left">
                                            <button class="btn"><i class="fa fa-thumbs-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4" align="center" style="padding-top: 30px">
                                    <img src="../src/images/profile_black.png" width="70" height="70">
                                    <h6><?php echo ($selectVip["fname"]." ".$selectVip["lname"]); ?></h6>
                                </div>

                            </div>

                            <?php

                            }
                            ?>


                        </div>


                    </div>
                </div>
            </div>


            <!--This is for Family Rooms -->
            <div class="col" align="center" style="margin-top: 20px">
                <div class="card" style="width: 66rem; box-shadow: 3px 3px 3px 3px #777777">
                    <div class="row">
                        <div class="col-5" style="padding:15px;margin-left: 10px">
                            <a href="gallery.php">
                                <img src="../src/images/Vip-room.jpg" class="card-img-top" alt="..." height="270">
                            </a>

                        </div>

                        <div class="col-6">
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
                        </div>

                    </div>

                    <?php
                    $selectFamily = "SELECT * FROM comments\n"
                    . "INNER JOIN Customers\n"
                    . "ON Customers.id = comments.customerid\n"
                    . "WHERE roomtype = 'Family'\n"
                    . "ORDER BY rate DESC";
                    $resultFamily = $conn->query($selectFamily);


                    ?>
                    <div class="card-body">
                        <div class="col" style="max-height: 400px; overflow: auto; overflow-x: hidden">

                            <?php $selectFamily = $resultFamily->fetch_assoc();//Firstly show one comment  ?>
                            <div class="row" style="border: 1px solid; padding-left: 15px; margin-top: 10px; margin-bottom:10px">
                                <div class="col-2" style="padding-top: 10px">
                                    <?php echo $selectFamily["rate"]; ?>
                                </div>
                                <div class="col-6" style="padding-top:10px">
                                    <div class="row" align="left">
                                        <p>
                                            <?php echo $selectFamily["text"]; ?>
                                        </p>

                                    </div>
                                    <div class="row" style="padding-top:15px">
                                        <div class="col-2" align="right">
                                            <button class="btn"><i class="fa fa-thumbs-up"></i></button>
                                        </div>
                                        <div class="col-2" align="left">
                                            <button class="btn"><i class="fa fa-thumbs-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4" align="center" style="padding-top: 30px">
                                    <img src="../src/images/profile_black.png" width="70" height="70">
                                    <h6><?php echo ($selectFamily["fname"]." ".$selectFamily["lname"]); ?></h6>
                                </div>

                            </div>

                            <div class="row" >
                                <a  data-bs-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Show more comment...
                                </a>
                            </div>

                            <?php
                            while($selectFamily = $resultFamily->fetch_assoc()){
                            ?>
                            <div class="row collapse" id="collapse2"style="border: 1px solid; padding-left: 15px; margin-top: 10px; margin-bottom:10px">
                                <div class="col-2" style="padding-top: 10px">
                                    <?php echo $selectFamily["rate"]; ?>
                                </div>
                                <div class="col-6" style="padding-top:10px">
                                    <div class="row" align="left">
                                        <p>
                                            <?php echo $selectFamily["text"]; ?>
                                        </p>

                                    </div>
                                    <div class="row" style="padding-top:15px">
                                        <div class="col-2" align="right">
                                            <button class="btn"><i class="fa fa-thumbs-up"></i></button>
                                        </div>
                                        <div class="col-2" align="left">
                                            <button class="btn"><i class="fa fa-thumbs-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4" align="center" style="padding-top: 30px">
                                    <img src="../src/images/profile_black.png" width="70" height="70">
                                    <h6><?php echo ($selectFamily["fname"]." ".$selectFamily["lname"]); ?></h6>
                                </div>

                            </div>

                            <?php
                            }
                            ?>


                        </div>


                    </div>
                </div>
            </div>

            <!--This is for Family Rooms -->
            <div class="col" align="center" style="margin-top: 20px">
                <div class="card" style="width: 66rem; box-shadow: 3px 3px 3px 3px #777777">
                    <div class="row">
                        <div class="col-5" style="padding:15px;margin-left: 10px">
                            <a href="gallery.php">
                                <img src="../src/images/Vip-room.jpg" class="card-img-top" alt="..." height="270">
                            </a>

                        </div>

                        <div class="col-6">
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
                        </div>

                    </div>

                    <?php
                    $selectDouble = "SELECT * FROM comments\n"
                        . "INNER JOIN Customers\n"
                        . "ON Customers.id = comments.customerid\n"
                        . "WHERE roomtype = 'Double'\n"
                        . "ORDER BY rate DESC";
                    $resultDouble= $conn->query($selectDouble);


                    ?>
                    <div class="card-body">
                        <div class="col" style="max-height: 400px; overflow: auto; overflow-x: hidden">

                            <?php $selectDouble = $resultDouble->fetch_assoc();//Firstly show one comment  ?>
                            <div class="row" style="border: 1px solid; padding-left: 15px; margin-top: 10px; margin-bottom:10px">
                                <div class="col-2" style="padding-top: 10px">
                                    <?php echo $selectDouble["rate"]; ?>
                                </div>
                                <div class="col-6" style="padding-top:10px">
                                    <div class="row" align="left">
                                        <p>
                                            <?php echo $selectDouble["text"]; ?>
                                        </p>

                                    </div>
                                    <div class="row" style="padding-top:15px">
                                        <div class="col-2" align="right">
                                            <button class="btn"><i class="fa fa-thumbs-up"></i></button>
                                        </div>
                                        <div class="col-2" align="left">
                                            <button class="btn"><i class="fa fa-thumbs-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4" align="center" style="padding-top: 30px">
                                    <img src="../src/images/profile_black.png" width="70" height="70">
                                    <h6><?php echo ($selectDouble["fname"]." ".$selectDouble["lname"]); ?></h6>
                                </div>

                            </div>

                            <div class="row" >
                                <a  data-bs-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Show more comment...
                                </a>
                            </div>

                            <?php
                            while($selectDouble = $resultDouble->fetch_assoc()){
                                ?>
                                <div class="row collapse" id="collapse3"style="border: 1px solid; padding-left: 15px; margin-top: 10px; margin-bottom:10px">
                                    <div class="col-2" style="padding-top: 10px">
                                        <?php echo $selectDouble["rate"]; ?>
                                    </div>
                                    <div class="col-6" style="padding-top:10px">
                                        <div class="row" align="left">
                                            <p>
                                                <?php echo $selectDouble["text"]; ?>
                                            </p>

                                        </div>
                                        <div class="row" style="padding-top:15px">
                                            <div class="col-2" align="right">
                                                <button class="btn"><i class="fa fa-thumbs-up"></i></button>
                                            </div>
                                            <div class="col-2" align="left">
                                                <button class="btn"><i class="fa fa-thumbs-down"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4" align="center" style="padding-top: 30px">
                                        <img src="../src/images/profile_black.png" width="70" height="70">
                                        <h6><?php echo ($selectDouble["fname"]." ".$selectDouble["lname"]); ?></h6>
                                    </div>

                                </div>

                                <?php
                            }
                            ?>


                        </div>


                    </div>
                </div>
            </div>

            <!--This is for Single Rooms -->
            <div class="col" align="center" style="margin-top: 20px">
                <div class="card" style="width: 66rem; box-shadow: 3px 3px 3px 3px #777777">
                    <div class="row">
                        <div class="col-5" style="padding:15px;margin-left: 10px">
                            <a href="gallery.php">
                                <img src="../src/images/Vip-room.jpg" class="card-img-top" alt="..." height="270">
                            </a>

                        </div>

                        <div class="col-6">
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
                        </div>

                    </div>

                    <?php
                    $selectSingle = "SELECT * FROM comments\n"
                        . "INNER JOIN Customers\n"
                        . "ON Customers.id = comments.customerid\n"
                        . "WHERE roomtype = 'Single'\n"
                        . "ORDER BY rate DESC";
                    $resultSingle= $conn->query($selectSingle);


                    ?>
                    <div class="card-body">
                        <div class="col" style="max-height: 400px; overflow: auto; overflow-x: hidden; padding-left: 15px; padding-right: 15px">

                            <?php $selectSingle = $resultSingle->fetch_assoc();//Firstly show one comment  ?>
                            <div class="row" style="border: 1px solid; padding-left: 15px; margin-top: 10px; margin-bottom:10px">
                                <div class="col-2" style="padding-top: 10px">
                                    <?php echo $selectSingle["rate"]; ?>
                                </div>
                                <div class="col-6" style="padding-top:10px">
                                    <div class="row" align="left">
                                        <p>
                                            <?php echo $selectSingle["text"]; ?>
                                        </p>

                                    </div>
                                    <div class="row" style="padding-top:15px">
                                        <div class="col-2" align="right">
                                            <button class="btn"><i class="fa fa-thumbs-up"></i></button>
                                        </div>
                                        <div class="col-2" align="left">
                                            <button class="btn"><i class="fa fa-thumbs-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4" align="center" style="padding-top: 30px">
                                    <img src="../src/images/profile_black.png" width="70" height="70">
                                    <h6><?php echo ($selectSingle["fname"]." ".$selectSingle["lname"]); ?></h6>
                                </div>

                            </div>

                            <div class="row" >
                                <a  data-bs-toggle="collapse" href="#collapse4" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Show more comment...
                                </a>
                            </div>

                            <?php
                            while($selectSingle = $resultSingle->fetch_assoc()){
                                ?>
                                <div class="row collapse" id="collapse4"style="border: 1px solid; padding-left: 15px; margin-top: 10px; margin-bottom:10px">
                                    <div class="col-2" style="padding-top: 10px">
                                        <?php echo $selectSingle["rate"]; ?>
                                    </div>
                                    <div class="col-6" style="padding-top:10px">
                                        <div class="row" align="left">
                                            <p>
                                                <?php echo $selectSingle["text"]; ?>
                                            </p>

                                        </div>
                                        <div class="row" style="padding-top:15px">
                                            <div class="col-2" align="right">
                                                <button class="btn"><i class="fa fa-thumbs-up"></i></button>
                                            </div>
                                            <div class="col-2" align="left">
                                                <button class="btn"><i class="fa fa-thumbs-down"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4" align="center" style="padding-top: 30px">
                                        <img src="../src/images/profile_black.png" width="70" height="70">
                                        <h6><?php echo ($selectSingle["fname"]." ".$selectSingle["lname"]); ?></h6>
                                    </div>

                                </div>

                                <?php
                            }
                            ?>


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

