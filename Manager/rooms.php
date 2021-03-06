<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Rooms</title>
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
                                            <a href="rooms.php" class="list-group-item list-group-item-action bg-primary" style="color:white">
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


        <div class="col-9">
            <div class="row"  align="center" style="margin-top: 2rem">

                <?php
                require("bookDash.php");
                ?>


            </div>

            <!-- This is for Table -->
            <div class="row" style="margin-top: 10rem; margin-bottom:5rem">

                <div class="col" style="border: 1px solid; background-color: white; padding:15px; overflow:auto; max-height: 600px">
                    <div class="row">
                        <div class="col-lg-4" align="left">
                            <form class="d-flex" action="rooms.php?operation=search" method="POST">
                                <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                        <div class="col-lg-8" align="right">
                            <a class="btn btn-outline-secondary" href="addRoom.php" style="max-width: 280px"><i class="bi bi-plus-circle-dotted"></i> Add new Room</a>
                        </div>
                    </div>


                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Door Number</th>
                            <th scope="col">Room Type</th>
                            <th scope="col">Floor</th>

                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">Edit / Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        include("../src/database/connect_db.php");

                        $select = "SELECT * FROM roomprices
                           INNER JOIN rooms
                            ON rooms.roomtype = roomprices.roomtype
                            ORDER BY doornumber ASC";

                        $result = $conn->query($select);

                        $operation = @$_GET["operation"];

                        if($operation == "search"){
                                if($_POST){
                                    $search = $_POST["search"];

                                    $selectDoorNumber = $conn -> query("SELECT * FROM rooms
                                                INNER JOIN roomprices ON rooms.roomtype = roomprices.roomtype
                                                WHERE rooms.doornumber like '".'%'.$search.'%'."' OR rooms.roomtype like '".'%'.$search.'%'."'
                                                 ORDER BY doornumber ASC
                                ");


                                    if($selectDoorNumber -> num_rows>0){
                                        while($results = $selectDoorNumber->fetch_assoc()){
                                            echo "
                                            <tr>
                                                <td>".$results['doornumber']."</td>
                                                <td>".$results['roomtype']."</td>
                                                <td>".$results['floornumber']."</td>
                                                <td>".$results['price']."</td>
                                                <td>".$results['status']."</td>
                         
                                                <td>
                                                     <div class='btn-group' role='group' aria-label='Basic outlined example'>
                                                     <input type='hidden' name='doornumber' value='".$results['doornumber']."'>
                                                     <input type='hidden' name='roomtype' value='".$results['roomtype']."'>
                                                     <input type='hidden' name='floornumber' value='".$results['floornumber']."'>
                                                     <input type='hidden' name='price' value='".$results['price']."'>
                                                     <input type='hidden' name='status' value='".$results['status']."'>
                                                     
                                                        <button class='btn btn-outline-success' type='submit' data-bs-toggle='modal' data-bs-target='#modalEdit'>Edit</button>
                                                        <a type='button' class='btn btn-outline-danger' data-bs-toggle='modal' data-bs-target='#modalDelete'>Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        ";
                                        }
                                    }

                                    else{
                                        echo "<div class='row' style='background-color: lightpink; margin-top:30px; margin-bottom: 20px'>There were no results...</div>";

                                    }

                                }



                        }


                    if($operation == ""){
                        if($result -> num_rows>0){
                            while($select = $result->fetch_assoc()){
                                echo "
                                            <tr>
                                                <td>".$select['doornumber']."</td>
                                                <td>".$select['roomtype']."</td>
                                                <td>".$select['floornumber']."</td>
                                                <td>".$select['price']."</td>
                                                <td>".$select['status']."</td>
                         
                                                <td>
                                                     <div class='btn-group' role='group' aria-label='Basic outlined example'>
                                                      <form method='POST' action='rooms.php'>
                                                     <input type='hidden' name='doornumber' value='".$select['doornumber']."'>
                                                     <input type='hidden' name='roomtype' value='".$select['roomtype']."'>
                                                     <input type='hidden' name='floornumber' value='".$select['floornumber']."'>
                                                     <input type='hidden' name='price' value='".$select['price']."'>
                                                     <input type='hidden' name='status' value='".$select['status']."'>
                                                     
                                                        <button class='btn btn-outline-success' type='submit' data-bs-toggle='modal' data-bs-target='#modalEdit'>Edit</button>
                                                        <a type='button' class='btn btn-outline-danger' data-bs-toggle='modal' data-bs-target='#modalDelete'>Delete</a>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        ";
                            }
                        }
                    }


                        ?>


                        </tbody>
                    </table>
                    <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalLabel">Edit the Room</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="col">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-pencil"></i> Edit the Image</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-trash"></i>Delete the Image</button>
                                        <div class="row" style="margin:5px">   </div>
                                        <img src="../src/images/Vip-room.jpg" width="450" height="300">
                                    </div>
                                    <div class="col">
                                        <div class="row" style="margin-top:10px; padding-left: 10px;padding-right: 10px">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Choose Room Type</option>
                                                <option value="1">Vip Room</option>
                                                <option value="2">Family Room</option>
                                                <option value="3">Double Room</option>
                                                <option value="3">Single Room Room</option>
                                            </select>
                                        </div>
                                        <div class="row" style="margin-top:10px; padding-left: 10px;padding-right: 10px">
                                            <label for="inputFloor" >Floor Number</label>
                                            <input type="number" class="form-control" id="inputFloor" value="<?php echo $_POST['floornumber']; ?>">
                                        </div>
                                        <div class="row" style="margin-top:10px; padding-left: 10px;padding-right: 10px">
                                            <label for="inputDoor" >Door Number</label>
                                            <input type="number" class="form-control" id="inputDoor">
                                        </div>
                                        <div class="row" style="margin-top:10px; padding-left: 10px;padding-right: 10px">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Choose Status</option>
                                                <option value="1">Empty</option>
                                                <option value="2">Fill</option>
                                            </select>
                                        </div>
                                        <div class="row" style="margin-top:10px; padding-left: 10px;padding-right: 10px">
                                            <label for="inputPrice" >Price</label>
                                            <input type="number" class="form-control" id="inputPrice">
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
                                    <h5 class="modal-title" id="exampleModalLabel">Delete the Room</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Do you want to delete this room?
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
        <a href="https://github.com/MustafaKANLI" target="_blank" style="color: #f3f4ed">Made by Mustafa Nur KANLI</a>
    </footer>

</div>
</div>
</body>
</html>