<?php
    //require("../src/database/connect_db.php");


    function loginQuery($email){ // query for the login
        $conn = connectDb();
        $selectSql = $conn -> query("SELECT * FROM `customers` 
                                        WHERE   email = '".$email."'");
        $user = $selectSql->fetch_assoc();
        return $user;
    }


    // query for the registration
    /*$add = $conn -> query("INSERT INTO customers(id, fname, lname, phonenumber, email, password)
            VALUES ('".$id."','".$name."','".$surname."','".$phoneNumber."','".$email."','".$password."')");*/



?>