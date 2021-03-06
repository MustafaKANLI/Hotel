<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Comments</title>
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
                                    <a href="comments.php" class="list-group-item list-group-item-action bg-primary" style="color:white">
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

                $select = $conn -> query("SELECT * FROM comments
                                             INNER JOIN customers ON comments.customerid = customers.id");

                $totalComments = $select -> num_rows;

                function avgRate($select){
                    $total = 0;
                    while($rows = $select -> fetch_assoc()){
                        $total += $rows['rate'];
                    }

                    $avg = $total / ($select-> num_rows);
                    $avg = number_format($avg, 2, '.', ',');

                    return $avg;
                }

                ?>

                <div class="col-4" style="border: 1px solid; margin-right:20px; background-color: white; width:20rem;height:10rem; padding-left:20px; padding-top:50px" align="center">
                    <div class="row">
                        <div class="col-2">
                            <img src="../src/images/star-half.svg" width="50" height="50">
                        </div>
                        <div class="col-10" align="center">
                            <div class="row">
                                <h5>Total Comments</h5>
                            </div>
                            <div class="row">
                                <h4><?php echo $totalComments; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4" style="border: 1px solid; background-color: white; width:20rem;height:10rem; padding-left:20px; padding-top:50px" align="center">
                    <div class="row">
                        <div class="col-2">
                            <img src="../src/images/star-half.svg" width="50" height="50">
                        </div>
                        <div class="col-10" align="center">
                            <div class="row">
                                <h5>Rate</h5>
                            </div>
                            <div class="row">
                                <h4><?php echo avgRate($select); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


            <!-- This is for Table -->
            <div class="row" style="margin-top: 10rem">

                <div class="col" style="border: 1px solid; background-color: white; padding:15px; margin-bottom: 30px; overflow:auto; max-height: 500px">
                    <?php

                    $select = $conn -> query("SELECT * FROM comments
                                             INNER JOIN customers ON comments.customerid = customers.id");

                    while ($comment = $select ->fetch_assoc()){



                    ?>

                    <div class="row" style="border: 1px solid; padding-left: 15px; margin-top: 10px">
                        <div class="col-2" style="padding-top: 10px">
                            <img src="../src/images/five-stars.png" alt="..." width="82px" height="15px">
                            <div class="row" style="margin-top: 5px">
                                <?php
                                echo $comment['datetime'];
                                ?>
                            </div>
                            <div class="row" style="margin-top: 5px">
                                <?php
                                echo $comment['roomtype'];
                                ?>
                                Room
                            </div>
                        </div>
                        <div class="col-6" style="padding-top:10px">
                            <div class="row">
                                <p>
                                    <?php echo $comment['text'] ?>
                                </p>

                            </div>
                            <div class="row" style="padding-top:15px">
                                <div class="col-2" align="right">
                                    <button class="btn"><i class="bi bi-hand-thumbs-up"></i></button>
                                </div>
                                <div class="col-2" align="left">
                                    <button class="btn"><i class="bi bi-hand-thumbs-down"></i></button>
                                </div>
                                <div class="col-2" align="right">
                                    <a class="btn" data-bs-toggle="modal" data-bs-target="#makeCommentModel"><i class="bi bi-chat-right-text"></i></a>
                                </div>
                                <div class="col-2" align="right">
                                    <a class="btn" data-bs-toggle="modal" data-bs-target="#commentModel"><i class="bi bi-trash"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 align-middle" align="center" style="padding-top: 20px">
                            <a><img src="../src/images/profile_black.png" width="70" height="70"></a>
                            <h6><?php echo $comment['fname']  , " ", $comment['lname'];  ?></h6>
                        </div>

                    </div>
                    <?php } ?>
                </div>


                    <div class="modal fade" id="commentModel" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalLabel">Delete the Comment</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Do you want to delete this comment?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="makeCommentModel" tabindex="-1" aria-labelledby="MakeCommentLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="MakeCommentLabel">Make review</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h6>Make your review</h6>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Comments</label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Send</button>
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