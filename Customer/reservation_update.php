<!--<form action="reservations_extendCancel.php" id="post" method="POST">
    <input type="hidden" id="doornumber" name="doornumber" value="<?php echo $_POST["doornumber"]; ?>">
    <input type="hidden" id="roomtype" name="roomtype" value="<?php echo $_POST["roomtype"]; ?>">
    <input type="hidden" id="checkindate" name="checkindate" value="<?php echo $_POST["checkindate"]; ?>">
    <input type="hidden" id="checkoutdate" name="checkoutdate" value="<?php echo $_POST["checkoutdate"]; ?>">
    <input type="hidden" id="price" name="price" value="<?php echo $_POST["doornumber"]; ?>">
</form>
<script>
    document.getElementById("post").submit();
</script>-->
<?php
session_start();
include("../src/database/connect_db.php");

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

if(isset($_POST["checkoutdate"])){


    $totalPrice = priceCalculator($_POST['checkindate'], $_POST['checkoutdate'], $_POST["roomtype"]);

    $add = $conn -> query("UPDATE reservations 
            SET checkoutdate = '".$_POST["checkoutdate"]."', totalprice = '".$totalPrice."'
            WHERE customerid = '".$_SESSION['id']."' and doornumber = '".$_POST["doornumber"]."'");
    echo($conn -> error);

    header("Location:reservations.php");

}
?>


