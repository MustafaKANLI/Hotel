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
        <h2>Available Rooms</h2>
    </div>

    <!--This is for content-->
    <div class="container" style="padding: 40px; border: 1px solid; overflow: auto; max-height: 800px; background-color: #FFFFFF">

        <?php

        $_SESSION['checkIn'] = $_POST['checkIn'];
        $_SESSION['checkOut'] = $_POST['checkOut'];
        $_SESSION['roomtype'] = $_POST['roomType'];
        $_SESSION['numberOfPerson'] = $_POST['numberOfPerson'];

/*
        echo $_SESSION['roomtype'];
        echo $_SESSION['numberOfPerson'];
        echo $_SESSION['checkIn'];
        echo $_SESSION['checkIn'];
*/
        $selectSql = "SELECT * FROM rooms\n"
            . "WHERE status = 'Empty' AND roomtype = '".$_POST['roomType']."'";
        $resultSql= $conn->query($selectSql);


        while($room = $resultSql->fetch_assoc()){

        ?>
        <div class="row align-items-center" style="box-shadow: 3px 3px 4px 4px grey; margin-bottom: 50px; padding-top: 10px; padding-bottom: 10px; height: 200px">
            <div class="col-sm-4" style="padding-left: 20px; padding-right:20px">
                <img class="responsive" width="60%" height="60%" src="../src/images/Vip-room.jpg">
            </div>
            <div class="col-sm-5">
                <div class="col-lg-4">
                    <img class="responsive" width="120px" height="24px" src="../src/images/four-eight-stars.png">
                </div>
                <div class="col-lg-4">
                    <p>Door Number: <?php echo $room['doornumber'] ?></p>
                </div>
                <div class="col-lg-4">
                    <p><?php echo $room['roomtype'] ?> Room</p>
                </div>
            </div>
            <div class="col-sm-3 ">
                <form action="reservationPayment.php" method="POST">
                    <input type="hidden" id="doorNumber" name="doorNumber" value="<?php echo $room['doornumber'] ?>">
                    <a href="reservationPayment.php">
                        <button class="btn btn-secondary btn-sm" type="submit" style="padding-left: 55px; font-size: 22px; padding-right: 55px">Book</button>
                    </a>
                </form>



            </div>
        </div>

        <?php
        }
        ?>

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



