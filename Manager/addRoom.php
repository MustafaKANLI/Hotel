<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Add Room</title>
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
<script>
    function submitForm(){
        document.getElementById("add").submit();

    }
</script>

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


        <div class="col-9" >
            <div class="col" style="border: 1px solid; padding: 30px; background-color: white">
                <form action="addRoom.php" id="add" method="POST">
                <div class="row"  align="center" style="margin-top: 2rem">
                    <div class="col-4 align-middle">
                        <div class="row">
                            <h5>Add Image</h5>
                        </div>
                        <div class="row">
                            <link rel="stylesheet" href="fileUpload.css" >
                            <div class="file-upload-wrapper">
                                <div class="card card-body view file-upload" style="background-color: lightgray">
                                    <div class="card-text file-upload-message">
                                        <i class="bi bi-plus-circle-dotted" style="color: #313642"></i>
                                        <p style="color: #313642">Drag and drop a file here or click</p>
                                        <input type="file" id="input-file-now" class="file-upload"/>
                                    </div>
                                </div>

                            </div>
                            <script>
                                $('.file-upload').file_upload();
                            </script>
                        </div>
                    </div>
                    <div class="col-4 align-middle" align="left">
                        <div class="row" style="margin-top:23px; padding-left: 10px;padding-right: 10px">
                            <select class="form-select" name="roomtype" aria-label="Default select example">
                                <option selected>Choose Room Type</option>
                                <option value="Vip">Vip Room</option>
                                <option value="Family">Family Room</option>
                                <option value="Double">Double Room</option>
                                <option value="Single">Single Room</option>
                            </select>
                        </div>
                        <div class="row" style="margin-top:10px; padding-left: 10px;padding-right: 10px">
                            <label for="inputFloor" >Floor Number</label>
                            <input type="number" name="floornumber" class="form-control" id="inputFloor">
                        </div>
                        <div class="row" style="margin-top:10px; padding-left: 10px;padding-right: 10px">
                            <label for="inputDoor" >Door Number</label>
                            <input type="number" name="doornumber" class="form-control" id="inputDoor">
                        </div>
                    </div>
                    <div class="col-4 align-middle" align="left">

                        <div class="row" style="margin-top:10px; padding-left: 10px;padding-right: 10px">
                            <h6>Select services</h6>
                            <div class="col">
                                <div class="form-check form-switch">

                                    <div class="col">
                                        <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="cityView" checked enabled>
                                        <label class="form-check-label" for="cityView">
                                            City/Sea View
                                        </label>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="doubleBed" checked enabled>
                                        <label class="form-check-label" for="doubleBed">
                                            Double Bed
                                        </label>
                                    </div>
                                    <div class="col">

                                        <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="shower" checked enabled>
                                        <label class="form-check-label" for="shower">
                                            Shower
                                        </label>

                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="bathroom" checked enabled>
                                        <label class="form-check-label" for="bathroom">
                                            Bathroom
                                        </label>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="roomServices" checked enabled>
                                        <label class="form-check-label" for="roomServices">
                                            Room Services
                                        </label>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="balcony" checked enabled>
                                        <label class="form-check-label" for="balcony">
                                            Balcony
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="col">

                                <div class="form-check form-switch">
                                    <div class="col">
                                        <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="satellite" checked enabled>
                                        <label class="form-check-label" for="satellite">
                                            TV Channels
                                        </label>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="wifi" checked enabled>
                                        <label class="form-check-label" for="wifi">
                                            Free Wifi
                                        </label>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="desk" checked enabled>
                                        <label class="form-check-label" for="desk">
                                            Study Desk
                                        </label>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="telephone" checked enabled>
                                        <label class="form-check-label" for="telephone">
                                            Telephone
                                        </label>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="minibar" checked enabled>
                                        <label class="form-check-label" for="minibar">
                                            Mini Bar
                                        </label>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="terrace" checked enabled>
                                        <label class="form-check-label" for="terrace">
                                            Terrace
                                        </label>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="row" style="padding-left: 14rem; margin-top: 5rem">
                            <a>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#savingAlert" class="btn btn-outline-primary">Save</button>
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
                                                New room will be added!!!
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button onclick="submitForm()" class="btn btn-primary">Continue</button>
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
include("../src/database/connect_db.php");

if(isset($_POST["floornumber"], $_POST["doornumber"], $_POST["roomtype"])){

    $doornumber = $_POST["doornumber"];
    $floornumber = $_POST["floornumber"];
    $roomtype = $_POST["roomtype"];

    $add = $conn -> query("INSERT INTO rooms(doornumber, floornumber, roomtype, status) 
                VALUES ('".$doornumber."','".$floornumber."','".$roomtype."','Empty')");
    echo($conn -> error);
}

?>