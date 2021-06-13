<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Add Customer</title>
</head>
<body style="background-color: #F4F6FC">
<link href="https://fonts.googleapis.com/icon?Single=Material+Icons" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
<!--This is for Header, navbar-->
<div class="container shadow-sm p-3 mb-5 bg-body rounded" style="background-color: #f3f4ed">
    <header class="header">
        <?php
        require ("header.php");
        if(!isset($_SESSION['id'])){
            header("Location: login.php");
            exit();
        }
        ?>
    </header>

</div>

<div class="container-flex">
    <!--This is for content-->

    <script>
        function submitForm(){
            document.getElementById("add").submit();

        }
    </script>

    <div class="row">
        <div class="col-2">
            <div class="sidenav">
                <link rel="stylesheet" href="simple-sidebar.css">
                <script src="subMenuOpening.js"></script>
                <div class="d-flex" id="wrapper">
                    <style>
                        ul.no-bullets {
                            list-style-type: none;
                            margin: 0;
                            padding: 0;
                        }

                    </style>

                    <!-- Sidebar -->
                    <div class="bg-light border-right" id="sidebar-wrapper">


                        <div class="sidebar-heading"  align="center">
                            <img src="../src/images/profile_black.png" width="60px" height="60px">

                            <h3 style="padding-top: 10px"><strong><?php echo($_SESSION['name'] . " " . $_SESSION['surname']); ?></strong></h3>
                        </div>
                        <li class="list-group " >

                            <ul class="no-bullets">
                                <li class="nav-item" >
                                    <a href="index.php" class="list-group-item list-group-item-action bg-dark" style="color:white">
                                        <i class="bi bi-graph-up"></i>    Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="bookings.php" class="list-group-item list-group-item-action bg-dark" style="color:white">
                                        <i class="bi bi-calendar-check"></i>    Bookings</a>
                                </li>
                                <li class="nav-item">
                                    <a href="booked.php" class="list-group-item list-group-item-action bg-dark" style="color:white">
                                        <i class="bi bi-clipboard-check"></i>    Booked Rooms</a>
                                </li>
                                <li class="nav-item">
                                    <a href="emptyRooms.php" class="list-group-item list-group-item-action bg-dark" style="color:white">
                                        <i class="bi bi-house-door"></i>    Empty Rooms</a>
                                </li>
                                <li class="nav-item" onClick="subMenuAction()">
                                    <a href="#" class="list-group-item list-group-item-action bg-primary" style="color:white">
                                        <i class="bi bi-gear"></i>  <span>Hotel Manager</span>

                                        <span style="padding-left: 3.60rem" onClick="subMenuIconAction()">
                                            <i id="icon" class="bi bi-chevron-double-right" ></i>
                                        </span>
                                    </a>

                                    <ul class="sub-menu" id="subMenu" style="display: none">
                                        <li class="nav-item">
                                            <a href="rooms.php" class="list-group-item list-group-item-action bg-dark" style="color:white">
                                                <i class="bi bi-house-fill"></i>    Rooms</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="customers.php" class="list-group-item list-group-item-action bg-primary" style="color:white">
                                                <i class="bi bi-person"></i>    Customers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="reservations.php" class="list-group-item list-group-item-action bg-dark" style="color:white" style="color:white">
                                                <i class="bi bi-receipt"></i>    Reservations</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="reports.php" class="list-group-item list-group-item-action bg-dark" style="color:white">
                                        <i class="bi bi-book-half"></i>    Reports</a>
                                </li>
                                <li class="nav-item">
                                    <a href="comments.php" class="list-group-item list-group-item-action bg-dark" style="color:white">
                                        <i class="bi bi-star"></i>    Comments</a>
                                </li>
                                <li class="nav-item">
                                    <a href="messages.php" class="list-group-item list-group-item-action bg-dark" style="color:white">
                                        <i class="bi bi-chat-text"></i>    Messages</a>
                                </li>

                            </ul>
                    </div>

                </div>
            </div>
        </div>
        <?php

        $email = $password = $emailError = $status = $statusError = "";
        $name = $nameError = $surname = $surnameError = $id = $idError = $phoneNumber = $phoneNumberError = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST")  {

            if (empty($_POST["name"])) {
                $nameError = "Name is required";

            } else {

                $name = input($_POST["name"]);
            }
            if (empty($_POST["surname"])) {
                $surnameError = "Surname is required";

            } else {
                $surname = input($_POST["surname"]);
            }
            if (empty($_POST["id"])) {
                $idError = "Id is required";

            } else {
                $id = input($_POST["id"]);
            }
            if (empty($_POST["phoneNumber"])) {
                $phoneNumberError = "Phone number is required";

            } else {
                $phoneNumber = input($_POST["phoneNumber"]);
            }
            if (empty($_POST["status"])) {
                $statusError = "Status is required";

            } else {
                $status = $_POST["status"];
            }
            if (empty($_POST["email"]) || filter_var($email, FILTER_VALIDATE_EMAIL) == true) {
                $emailError = "E-mail is required";

            } else {
                $email = input($_POST["email"]);
            }

        }
        function input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>


        <div class="col-9" >
            <div class="col" style="border: 1px solid; padding: 30px; background-color: white">
                <form action="addCustomer.php" method="POST" id="add">
                    <div class="row" align="left" style="margin-top:40px">
                        <p><span class="error" style="color: #ff0000">all of them are required</span></p>
                        <div class="col-lg-6">
                            <h5>Name</h5>
                            <div class="form-floating mb-3">
                                <input name="name" type="text" class="form-control" id="nameInput" >
                                <label for="nameInput">Name</label>
                                <?php
                                echo $nameError;
                                ?>
                            </div>
                            <h5>Surname</h5>
                            <div class="form-floating mb-3">
                                <input name="surname" type="text" class="form-control" id="surnameInput">
                                <label for="surnameInput">Surname</label>
                                <?php
                                echo $surnameError;
                                ?>
                            </div>
                            <h5>ID</h5>
                            <div class="form-floating mb-3">
                                <input name="id" type="number" class="form-control" id="IdInput">
                                <label for="IdInput">ID</label>
                                <?php
                                echo $idError;
                                ?>
                            </div>


                        </div>
                        <div class="col-lg-6">
                            <h5>Phone Number</h5>
                            <div class="form-floating mb-3">
                                <input name="phoneNumber" type="phone" class="form-control" id="phoneInput" >
                                <label for="phoneInput">Phone Number</label>
                                <?php
                                echo $phoneNumberError;
                                ?>
                            </div>
                            <h5>E-Mail</h5>
                            <div class="form-floating mb-3">
                                <input name="email" type="email" class="form-control" id="mailInput">
                                <label for="mailInput">E-mail address</label>
                                <?php
                                echo $emailError;
                                ?>
                            </div>
                            <h5>Select Status</h5>
                            <div class="form-floating">
                                <select class="form-select" name="status" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected>Select status</option>
                                    <option value="In">In</option>
                                    <option value="Out">Out</option>
                                </select>
                                <label for="floatingSelect">Status</label>
                            </div>

                            <div align="right" style="margin-top: 30px">
                                <a >
                                    <button type="button"  class="btn btn-primary btn-lg" style="padding-left: 30px; padding-right: 30px;
                            font-size: 22px" data-bs-toggle="modal" data-bs-target="#savingAlert">Save</button>
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="savingAlert" tabindex="-1" aria-labelledby="saveModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content" align="left">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="saveModalLabel">Do You Want To Continue?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cancel" ></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                                    New customer will be added!!!
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button  onClick="submitForm()'" class="btn btn-primary">Continue</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>





<div class="container-fluid" align="right" style="padding-top: 40px; padding-bottom: 30px; padding-right: 30px; background-color: #313642">
    <footer>
        <a href="https://github.com/MustafaKANLI" target="_blank" style="color: #f3f4ed">Made by Mustafa Nur KANLI</a>
    </footer>

</div>
</div>
</body>
</html>

<?php

//include("../src/database/connect_db.php");

if($email != "" and $name != "" and $surname != "" and $id != ""){

    $password = md5($_POST["id"]);


    $add = $conn -> query("INSERT INTO customers(id, fname, lname, phonenumber, email, password, status) 
                VALUES ('".$id."','".$name."','".$surname."','".$phoneNumber."','".$email."','".$password."', '".$status."')");
    echo($conn -> error);



}

?>