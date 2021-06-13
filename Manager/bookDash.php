<?php

include("../src/database/connect_db.php");

$selectRooms = $conn->query("SELECT * FROM rooms");
$totalRooms = $selectRooms->num_rows;


$date = date("Y-m-d");
$selectSqlBooking = $conn->query("SELECT * FROM reservations
                INNER JOIN rooms ON reservations.doornumber = rooms.doornumber
                INNER JOIN customers ON customers.id = reservations.customerid
                WHERE checkindate > '" . $date . "'
                ORDER BY reservations.doornumber ASC
                ");
$bookingRooms = $selectSqlBooking->num_rows;


$selectSqlBooked = $conn->query("SELECT * FROM reservations
                INNER JOIN rooms ON reservations.doornumber = rooms.doornumber
                INNER JOIN customers ON customers.id = reservations.customerid
                WHERE checkindate < '" . $date . "'
                ORDER BY reservations.doornumber ASC
                ");
$bookedRooms = $selectSqlBooked->num_rows;

$selectEmptyRooms = $conn->query("SELECT * FROM rooms WHERE status = 'Empty'");
$emptyRooms = $selectEmptyRooms->num_rows;


?>

<div class="col-3" style="border: 1px solid; margin-right:20px; background-color: white; width:15rem;height:10rem;
                        padding-left:20px; padding-top:50px; box-shadow: 3px 3px 4px 4px #777777" align="center">
    <a href="rooms.php" style="text-decoration: none; color: black;">
        <div class="row" >
            <div class="col-2">
                <img src="../src/images/rooms.png" width="50" height="50">
            </div>
            <div class="col-10" align="center">
                <div class="row">
                    <h5 >Total Rooms</h5>
                </div>
                <div class="row">
                    <h4><?php echo $totalRooms; ?></h4>
                </div>
            </div>
        </div>
    </a>

</div>
<div class="col-3" style="border: 1px solid; margin-right:20px;  background-color: white; width:15rem;height:10rem;
                    padding-left:20px; padding-top:50px; box-shadow: 3px 3px 4px 4px #777777" align="center">
    <a href="booked.php" style="text-decoration: none; color: black;">
    <div class="row">
        <div class="col-2">
            <img src="../src/images/rooms.png" width="50" height="50">
        </div>
        <div class="col-10" align="center">
            <div class="row">
                <h5>Booked Rooms</h5>
            </div>
            <div class="row">
                <h4><?php echo $bookedRooms; ?></h4>
            </div>
        </div>
    </div>
    </a>
</div>
<div class="col-3" style="border: 1px solid; background-color: white; width:15rem;height:10rem; margin-right:20px;
                    padding-left:20px; padding-top:50px; box-shadow: 3px 3px 4px 4px #777777" align="center">
    <a href="bookings.php" style="text-decoration: none; color: black;">
    <div class="row">
        <div class="col-2">
            <img src="../src/images/rooms.png" width="50" height="50">
        </div>
        <div class="col-10" align="center">
            <div class="row">
                <h5>Booking Rooms</h5>
            </div>
            <div class="row">
                <h4><?php echo $bookingRooms; ?></h4>
            </div>
        </div>
    </div>
    </a>
</div>
<div class="col-3" style="border: 1px solid; background-color: white; width:15rem;height:10rem;
                        padding-left:20px; padding-top:50px; box-shadow: 3px 3px 4px 4px #777777"" align="center">
<a href="emptyRooms.php" style="text-decoration: none; color: black;">
    <div class="row">
        <div class="col-2">
            <img src="../src/images/rooms.png" width="50" height="50">
        </div>
        <div class="col-10" align="center">
            <div class="row">
                <h5>Empty Rooms</h5>
            </div>
            <div class="row">
                <h4><?php echo $emptyRooms; ?></h4>
            </div>
        </div>
    </div>
</a>
</div>
