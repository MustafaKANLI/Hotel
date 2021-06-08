<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Reservations</title>
</head>
<body style="background-color: #F4F6FC">
<link href="https://fonts.googleapis.com/icon?Single=Material+Icons" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
<!--This is for Header, navbar-->
<div class="container shadow-sm p-3 mb-5 bg-body rounded" style="background-color: #f3f4ed">
    <header class="header">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="../src/images/logo.png" alt="" width=50 height="30">
                    Paradis Hotel

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse"  id="navbarSupportedContent">
                    <div class="col" align="left">
                        <link rel="stylesheet" href="profileHoverDropdown.css">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="nav-link " href="#"><img src="../src/images/profile.png" width="35px" height="35px"></a>
                                    <div class="dropdown-content">
                                        <ul >
                                            <li ><a href="profileInformations.html"  style="color:black">Information</a></li>
                                            <li ><a href="profilePassword.html"  style="color:black">Change Password</a></li>
                                            <li ><a href="login.html" style="color:black">Log Out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
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

                            <h3 style="padding-top: 10px"><strong>Mustafa KANLI</strong></h3>
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
                                            <a href="customers.php" class="list-group-item list-group-item-action bg-dark" style="color:white">
                                                <i class="bi bi-person"></i>    Customers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="reservations.php" class="list-group-item list-group-item-action bg-primary" style="color:white" style="color:white">
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

                            </ul>
                    </div>

                </div>
            </div>
        </div>


        <div class="col-9">
            <div class="row"  align="center" style="margin-top: 2rem">

                <div class="col-4" style="border: 1px solid; margin-right:20px; background-color: white; width:20rem;height:10rem; padding-left:20px; padding-top:50px" align="center">
                    <div class="row">
                        <div class="col-2">
                            <img src="../src/images/receipt.svg" width="50" height="50">
                        </div>
                        <div class="col-10" align="center">
                            <div class="row">
                                <h5>Total Reservations</h5>
                            </div>
                            <div class="row">
                                <h4>1550</h4>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- This is for Table -->
            <?php
            $date = date("Y-m-d");
            include("../src/database/connect_db.php");

            $selectSql = "SELECT * FROM reservations
                INNER JOIN rooms ON reservations.doornumber = rooms.doornumber
                INNER JOIN customers ON customers.id = reservations.customerid
               
                ORDER BY reservations.doornumber ASC
                ";
            $resultSql= $conn->query($selectSql);

            ?>
            <!-- This is for Table -->
            <div class="row" style="margin-top: 10rem">
                <div class="col" style="border: 1px solid; padding:15px; overflow:auto; max-height: 600px; background-color: white">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Room Type</th>
                            <th scope="col">Door Number</th>
                            <th scope="col">Customer ID</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Customer Surname</th>
                            <th scope="col">Check-in Date</th>
                            <th scope="col">Check-out Date</th>
                            <th scope="col">Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($room = $resultSql->fetch_assoc()){
                            ?>
                            <tr>
                                <td><?php echo $room["roomtype"]?> Room</td>
                                <td><?php echo $room["doornumber"]?></td>
                                <td><?php echo $room["customerid"]?></td>
                                <td><?php echo $room["fname"]?></td>
                                <td><?php echo $room["lname"]?></td>
                                <td><?php echo $room["checkindate"]?></td>
                                <td><?php echo $room["checkoutdate"]?></td>
                                <td><?php echo $room["totalprice"]?></td>
                            </tr>

                            <?php
                        }
                        ?>

                        </tbody>
                    </table>

                    <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalLabel">Edit the Customer</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="col">
                                        <h5>Reservation ID</h5>
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="IdInput" value="789456">
                                            <label for="IdInput">Reservation ID</label>
                                        </div>
                                        <h5>Name</h5>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="nameInput" value="Mustafa">
                                            <label for="nameInput">Name</label>
                                        </div>
                                        <h5>Surname</h5>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="surnameInput" value="KANLI">
                                            <label for="surnameInput">Surname</label>
                                        </div>

                                        <h5>Room Id</h5>
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="RoomIdInput" value="42">
                                            <label for="RoomIdInput">Room Id</label>
                                        </div>
                                        <h5>Check-in Date</h5>
                                        <div class="form-floating mb-3">
                                            <input type="date" class="form-control" id="checkInInput" value="13.04.2021">
                                            <label for="checkInInput">Check-in Date</label>
                                        </div>
                                        <h5>Check-out Date</h5>
                                        <div class="form-floating mb-3">
                                            <input type="date" class="form-control" id="checkOutInput" value="15.04.2021">
                                            <label for="checkOutInput">Check-out Date</label>
                                        </div>
                                        <h5>Price</h5>
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="priceInput" value="900">
                                            <label for="priceInput">Price</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete the Customer</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Do you want to delete this customer?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>

<div class="container-fluid" align="right" style="padding-top: 40px; padding-bottom: 30px; padding-right: 30px; background-color: #313642">
    <footer>
        <a href="https://github.com/201KANLI" target="_blank" style="color: #f3f4ed">Made by Mustafa Nur KANLI</a>
    </footer>

</div>
</div>
</body>
</html>