<?php
session_start();
include("../src/database/connect_db.php");

$text = $rate = "";

if($_SESSION['id'] != ""){

    $text = input($_POST["text"]);
    $rate = input($_POST["rate"]);

    $date = date("Y-m-d h:i:sa");


    if($text != "" or $rate != ""){

        $add = $conn -> query("INSERT INTO comments(`customerid`, `datetime`, `roomtype`, `text`, `rate`) 
                VALUES ('".$_SESSION['id']."','".$date."','".$_SESSION['roomtype']."','".$text."','".$rate."')");

    }


}


function input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

header("Location:rooms.php");

?>
