<?php

    //function loginQuery(){ // query for the login

        $selectSql = $conn -> query("SELECT * FROM `customers` 
                                        WHERE   email = '".$email."'");
        $user = $selectSql->fetch_assoc();
   // }


    // query for the registration
    $add = $conn -> query("INSERT INTO customers(id, fname, lname, phonenumber, email, password)
            VALUES ('".$id."','".$name."','".$surname."','".$phoneNumber."','".$email."','".$password."')");



?>