<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>User Messages</title>
</head>
<body style="background-color: #F4F6FC">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<div class="container" style="background-color:#E8EAEF">
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

    <div class="container" style="padding-top:20px; padding-bottom: 10px; background-color: #E8EAEF">

    </div>

    <!--This is for content-->
    <div class="container" style="padding: 40px; border: 1px solid; margin-top: 70px; max-height: 800px; max-width: 980px; background-color: #FFFFFF">
        <div class="col" align="center" style="padding-bottom: 50px">
            <h2>My Messages</h2>
            <div class="row" align="left" style="margin-top:40px">
                <div class="col-4">
                    <div class="list-group">
                        <a href="profile_accountDetails.php" class="list-group-item list-group-item-action">Account Details</a>
                        <a href="reservations.php" class="list-group-item list-group-item-action">Reservations</a>
                        <a href="profile_changePassword.php" class="list-group-item list-group-item-action">Change Password</a>
                        <a href="profile_reviews.php" class="list-group-item list-group-item-action">Reviews</a>
                        <a href="profile_messages.php" class="list-group-item list-group-item-action active">Messages</a>

                    </div>
                </div>
                <div class="col-8" style="padding: 10px; max-height: 500px; overflow:auto; overflow-x: hidden; border: 1px solid">
                    <form action="sendMessage.php" method="POST">
                    <div class="row align-items-center" style="margin-bottom: 10px">

                        <div class="col-lg-8">

                            <div class="form-floating">
                                <textarea class="form-control" name="text" placeholder="Leave a message here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Message</label>
                            </div>

                        </div>
                        <div class="col-lg-3" style="margin-left: 10px">
                            <div class="row">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </div>

                    </div>
                    </form>

                    <?php


                    $select = $conn->query("SELECT * FROM messages
                        INNER JOIN customers
                        ON customers.id = messages.customerid
                       WHERE customerid = '".$_SESSION["id"]."'
                       ORDER BY datetime DESC");


                   // echo $conn -> error;

                    while($result = $select->fetch_assoc()){


                        ?>

                        <div class="row" style="border: 1px solid; padding-left: 15px; margin: 5px">
                            <div class="col-lg-9" style="padding-top:10px">
                                <div class="row">
                                    <p>
                                        <?php
                                        echo $result["text"];
                                        ?>
                                    </p>

                                </div>

                            </div>
                            <div class="col-lg-3" style="padding-top:10px">
                                <div class="row">
                                    <p>
                                        <?php
                                        echo $result["datetime"];
                                        ?>
                                    </p>

                                </div>

                            </div>


                        </div>

                    <?php } ?>



                </div>
            </div>
        </div>
    </div>

    <div class="container" style="padding-top:30px; padding-bottom: 10px"></div>

    <div class="container" align="right" style="padding-top: 40px; padding-bottom: 30px; padding-right: 30px; background-color: #313642">
        <footer>
            <a href="https://github.com/MustafaKANLI" target="_blank" style="color: #f3f4ed">Made by Mustafa Nur KANLI</a>
        </footer>
    </div>
</div>
</body>
</html>
