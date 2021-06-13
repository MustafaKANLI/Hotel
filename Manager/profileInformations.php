<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>User Informations</title>
</head>
<body style="background-color: #F4F6FC">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                                    <a href="#" class="list-group-item list-group-item-action bg-dark" style="color:white">
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
                                            <a href="customers.php" class="list-group-item list-group-item-action bg-dark" style="color:white">
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



        <div class="container" style="padding: 40px; border: 1px solid; margin-top: 70px; max-height: 800px; max-width: 980px; background-color: #FFFFFF">
            <div class="col" align="center" style="padding-bottom: 50px">
                <h2>Account Details</h2>
                <div class="row" align="left" style="margin-top:40px">
                    <div class="col-4">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                Account Details
                            </a>
                            <a href="profilePassword.php" class="list-group-item list-group-item-action">Change Password</a>

                        </div>
                    </div>
                    <div class="col-8">
                        <form action="profileInformations.php" id="update" method="POST">
                            <h5>Name</h5>
                            <div class="form-floating mb-3">
                                <input type="text" name="name" class="form-control" id="nameInput" value="<?php echo($_SESSION['name'])?>">
                                <label for="nameInput">Name</label>
                            </div>
                            <h5>Surname</h5>
                            <div class="form-floating mb-3">
                                <input type="text" name="surname" class="form-control" id="surnameInput" value="<?php echo($_SESSION['surname'])?>">
                                <label for="surnameInput">Surname</label>
                            </div>
                            <h5>ID</h5>
                            <div class="form-floating mb-3">
                                <input type="number" name="id" class="form-control" id="IdInput" value="<?php echo($_SESSION['id'])?>">
                                <label for="IdInput">ID</label>
                            </div>
                            <h5>Phone Number</h5>
                            <div class="form-floating mb-3">
                                <input type="phone" name="phoneNumber" class="form-control" id="phoneInput" value="<?php echo($_SESSION['phone'])?>">
                                <label for="phoneInput">Phone Number</label>
                            </div>

                            <h5>E-Mail</h5>
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="mailInput" value="<?php echo($_SESSION['email'])?>">
                                <label for="mailInput">Email address</label>
                            </div>


                            <div align="right" style="margin-top: 30px">
                                <a >
                                    <button type="button"  class="btn btn-primary btn-lg" style="padding-left: 30px; padding-right: 30px;
                            font-size: 22px" data-bs-toggle="modal" data-bs-target="#bookingAlert">Save Changes</button>
                                </a>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="bookingAlert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content" align="left">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Do You Want To Continue?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cancel" ></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                Changes is showed after the re-login and your informations will be changed !!!
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button  onClick="submitForm()" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                        <script>
                            function submitForm(){
                                document.getElementById("update").submit();
                            }
                        </script>
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
if(isset($_POST["name"], $_POST["surname"], $_POST["id"], $_POST["phoneNumber"], $_POST["email"])){

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $id = $_POST["id"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];


    $add = $conn -> query("UPDATE managers 
            SET fname = '".$name."', lname = '".$surname."', id = '".$id."', email = '".$email."', phonenumber = '".$phoneNumber."'
            WHERE id = '".$_SESSION['id']."'");
    echo($conn -> error);



}
?>
