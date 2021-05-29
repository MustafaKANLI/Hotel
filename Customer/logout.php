<?php
    include("../src/database/connect_db.php");
    require('header.php');
    session_destroy(); 				//destroy all the current sessions
    header("Location:index.php");

    //exit();
?>
