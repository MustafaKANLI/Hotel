<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Home</title>
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
            ?>
        </header>

    </div>

    <div class="container" style="padding-top:20px; padding-bottom: 10px; background-color: #E8EAEF">

    </div>

    <!--This is for content-->
    <div class="container" style="padding: 40px; border: 1px solid; margin-top: 70px; max-height: 800px; max-width: 980px; background-color: #FFFFFF">
        <div class="col" align="center" style="padding-bottom: 50px">
            <h2>My Reviews</h2>
            <div class="row" align="left" style="margin-top:40px">
                <div class="col-4">
                    <div class="list-group">
                        <a href="profile_accountDetails.php" class="list-group-item list-group-item-action">Account Details</a>
                        <a href="reservations.php" class="list-group-item list-group-item-action">Reservations</a>
                        <a href="profile_changePassword.php" class="list-group-item list-group-item-action">Change Password</a>
                        <a href="profile_reviews.php" class="list-group-item list-group-item-action active">Reviews</a>

                    </div>
                </div>
                <div class="col-8" style="padding: 10px; max-height: 300px; overflow:auto; border: 1px solid">
                    <div class="row" style="border: 1px solid; padding-left: 15px; margin: 5px">
                        <div class="col-2" style="padding-top: 10px">
                            <img src="../src/images/five-stars.png" alt="..." width="82px" height="15px">
                        </div>
                        <div class="col-6" style="padding-top:10px">
                            <div class="row">
                                <p>
                                    This is very nice hotel. I love it. I prefer to everyone. Entertainments are so good. Also this
                                    website is perfect. I love it's design, too simple and minimal.
                                </p>

                            </div>
                            <div class="row" style="padding-top:1px">
                                <div class="col-2" align="right">
                                    <button class="btn"><i class="fa fa-thumbs-up"></i></button>
                                </div>
                                <div class="col-2" align="left">
                                    <button class="btn"><i class="fa fa-thumbs-down"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" align="center" style="padding-top: 30px">
                            <img src="../src/images/profile_black.png" width="70" height="70">
                            <h6>Mustafa KANLI</h6>
                            <div class="row" style="padding-top: 15px">
                                <div class="col" align="right">
                                    <button class="btn"><i class="fa fa-trash"></i></button>
                                </div>
                                <div class="col" align="left">
                                    <button class="btn"><i class="fa fa-pencil"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row" style="border: 1px solid; padding-left: 15px; margin: 5px">
                        <div class="col-2" style="padding-top: 10px">
                            <img src="../src/images/four-stars.png" alt="..." width="82px" height="15px">
                        </div>
                        <div class="col-6" style="padding-top:10px">
                            <div class="row">
                                <p>
                                    This is very nice hotel. I love it. I prefer to everyone. Entertainments are so good. Also this
                                    website is perfect. I love it's design, too simple and minimal.
                                </p>

                            </div>
                            <div class="row" style="padding-top:1px">
                                <div class="col-2" align="right">
                                    <button class="btn"><i class="fa fa-thumbs-up"></i></button>
                                </div>
                                <div class="col-2" align="left">
                                    <button class="btn"><i class="fa fa-thumbs-down"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" align="center" style="padding-top: 30px">
                            <img src="../src/images/profile_black.png" width="70" height="70">
                            <h6>Mustafa KANLI</h6>
                            <div class="row" style="padding-top: 15px">
                                <div class="col" align="right">
                                    <button class="btn"><i class="fa fa-trash"></i></button>
                                </div>
                                <div class="col" align="left">
                                    <button class="btn"><i class="fa fa-pencil"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row" style="border: 1px solid; padding-left: 15px; margin: 5px">
                        <div class="col-2" style="padding-top: 10px">
                            <img src="../src/images/four-stars.png" alt="..." width="82px" height="15px">
                        </div>
                        <div class="col-6" style="padding-top:10px">
                            <div class="row">
                                <p>
                                    This is very nice hotel. I love it. I prefer to everyone. Entertainments are so good. Also this
                                    website is perfect. I love it's design, too simple and minimal.
                                </p>

                            </div>
                            <div class="row" style="padding-top:1px">
                                <div class="col-2" align="right">
                                    <button class="btn"><i class="fa fa-thumbs-up"></i></button>
                                </div>
                                <div class="col-2" align="left">
                                    <button class="btn"><i class="fa fa-thumbs-down"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" align="center" style="padding-top: 30px">
                            <img src="../src/images/profile_black.png" width="70" height="70">
                            <h6>Mustafa KANLI</h6>
                            <div class="row" style="padding-top: 15px">
                                <div class="col" align="right">
                                    <button class="btn"><i class="fa fa-trash"></i></button>
                                </div>
                                <div class="col" align="left">
                                    <button class="btn"><i class="fa fa-pencil"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row" style="border: 1px solid; padding-left: 15px; margin: 5px">
                        <div class="col-2" style="padding-top: 10px">
                            <img src="../src/images/three-stars.png" alt="..." width="82px" height="15px">
                        </div>
                        <div class="col-6" style="padding-top:10px">
                            <div class="row">
                                <p>
                                    This is very nice hotel. I love it. I prefer to everyone. Entertainments are so good. Also this
                                    website is perfect. I love it's design, too simple and minimal.
                                </p>

                            </div>
                            <div class="row" style="padding-top:1px">
                                <div class="col-2" align="right">
                                    <button class="btn"><i class="fa fa-thumbs-up"></i></button>
                                </div>
                                <div class="col-2" align="left">
                                    <button class="btn"><i class="fa fa-thumbs-down"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" align="center" style="padding-top: 30px">
                            <img src="../src/images/profile_black.png" width="70" height="70">
                            <h6>Mustafa KANLI</h6>
                            <div class="row" style="padding-top: 15px">
                                <div class="col" align="right">
                                    <button class="btn"><i class="fa fa-trash"></i></button>
                                </div>
                                <div class="col" align="left">
                                    <button class="btn"><i class="fa fa-pencil"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>

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