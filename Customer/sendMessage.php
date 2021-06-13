<?php
session_start();
include("../src/database/connect_db.php");

$date = date("Y-m-d H:i:sa");

$add = $conn -> query("INSERT INTO messages(customerid, datetime, text) 
                                            VALUES ('".$_SESSION['id']."','".$date."','".$_POST['text']."') ");

header("Location: profile_messages.php");
?>
