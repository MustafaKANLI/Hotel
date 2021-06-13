<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Home</title>
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
                                    <a href="index.php" class="list-group-item list-group-item-action bg-primary" style="color:white">
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

        <?php
        function revenueCalc($query){
            include("../src/database/connect_db.php");
            $total = 0;
            while($result = $query->fetch_assoc()){
                $total += $result['revenue'];
            }

            return $total;
        }



        ?>



        <div class="col-sm-3"  align="center" style="margin-top: 2rem">
            <div class="row" style="width:25rem;height:10rem">
                <div class="col-8" style="border: 1px solid; background-color: white; padding-left:20px; padding-top:50px " align="center" >
                    <div class="row">
                        <div class="col-2">
                            <img src="../src/images/dollar.png" width="30" height="50">
                        </div>
                        <div class="col-10" align="center">
                            <div class="row">
                                <h3>Revenue</h3>
                            </div>
                            <div class="row">
                                <h6>150 000$</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 6rem; width:25rem;height:10rem">
                <div class="col-8" style="border: 1px solid; background-color: white; padding-left:20px; padding-top:50px " align="center">
                    <div class="row">
                        <div class="col-2">
                            <img src="../src/images/dollar.png" width="30" height="50">
                        </div>
                        <div class="col-10" align="center">
                            <div class="row">
                                <h3>Expense</h3>
                            </div>
                            <div class="row">
                                <h6>50 000$</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3"  align="center" style="margin-top: 2rem">
            <div class="row" style="width:25rem;height:10rem">
                <div class="col-8" style="border: 1px solid; background-color: white; padding-left:20px; padding-top:50px" align="center">
                    <div class="row">
                        <div class="col-2">
                            <img src="../src/images/people.png" width="50" height="50">
                        </div>
                        <div class="col-10" align="center">
                            <div class="row">
                                <h3>Customers</h3>
                            </div>
                            <div class="row">
                                <h6>400</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 6rem; width:25rem;height:10rem">
                <div class="col-8" style="border: 1px solid; background-color: white; padding-left:20px; padding-top:50px" align="center">
                    <div class="row">
                        <div class="col-2">
                            <img src="../src/images/rooms.png" width="50" height="50">
                        </div>
                        <div class="col-10" align="center">
                            <div class="row">
                                <h3>Rooms</h3>
                            </div>
                            <div class="row">
                                <h6>120</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3"  align="center" style="margin-top: 2rem">
            <div class="row" style="width:25rem;height:10rem">
                <div class="col-8"  align="center">
                    <div class="row" >
                        <div class="col-2">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/b/bd/Bar_graph.svg" width="250px" height="150px">
                        </div>

                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 6rem; width:25rem;height:10rem">
                <div class="col-8" style="border: 1px solid; background-color: white; padding-left:20px;  padding-top:50px" align="center">
                    <div class="row" >
                        <div class="col-2">
                            <img src="../src/images/star-half.svg" width="50" height="50">
                        </div>
                        <div class="col-10" align="center">
                            <div class="row">
                                <h3>Rate</h3>
                            </div>
                            <div class="row">
                                <h6>4.82</h6>
                            </div>
                        </div>
                    </div>
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