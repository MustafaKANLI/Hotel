<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Gallery</title>
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
        <h2>Gallery</h2>
    </div>
    <div class="container" style="padding: 40px; border: 1px solid; background-color: #FFFFFF">
        <div class="row">
            <div class="col-lg-8" style="padding-right: 20px">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 7"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../src/images/Vip-room.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../src/images/Vip-room.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../src/images/Vip-room.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../src/images/Vip-room.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../src/images/Vip-room.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../src/images/Vip-room.jpg" class="d-block w-100" alt="...">
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-lg-4" style="overflow: auto; max-height: 530px; border: 1px solid">
                <div class="row" style="padding:10px">
                    <a href="#">
                        <img src="../src/images/Vip-room.jpg" class="d-block w-100" alt="..." width="100%" height="100%">
                    </a>
                </div>
                <div class="row" style="padding:10px">
                    <a href="#">
                        <img src="../src/images/Vip-room.jpg" class="d-block w-100" alt="..." width="100%" height="100%">
                    </a>
                </div>
                <div class="row" style="padding:10px">
                    <a href="#">
                        <img src="../src/images/Vip-room.jpg" class="d-block w-100" alt="..." width="100%" height="100%">
                    </a>
                </div>
                <div class="row" style="padding:10px">
                    <a href="#">
                        <img src="../src/images/Vip-room.jpg" class="d-block w-100" alt="..." width="100%" height="100%">
                    </a>
                </div>
                <div class="row" style="padding:10px">
                    <a href="#">
                        <img src="../src/images/Vip-room.jpg" class="d-block w-100" alt="..." width="100%" height="100%">
                    </a>
                </div>
                <div class="row" style="padding:10px">
                    <a href="#">
                        <img src="../src/images/Vip-room.jpg" class="d-block w-100" alt="..." width="100%" height="100%">
                    </a>
                </div>
                <div class="row" style="padding:10px">
                    <a href="#">
                        <img src="../src/images/Vip-room.jpg" class="d-block w-100" alt="..." width="100%" height="100%">
                    </a>
                </div>
                <div class="row" style="padding:10px">
                    <a href="#">
                        <img src="../src/images/Vip-room.jpg" class="d-block w-100" alt="..." width="100%" height="100%">
                    </a>
                </div>
                <div class="row" style="padding:10px">
                    <a href="#">
                        <img src="../src/images/Vip-room.jpg" class="d-block w-100" alt="..." width="100%" height="100%">
                    </a>
                </div>
                <div class="row" style="padding:10px">
                    <a href="#">
                        <img src="../src/images/Vip-room.jpg" class="d-block w-100" alt="..." width="100%" height="100%">
                    </a>
                </div>
                <div class="row" style="padding:10px">
                    <a href="#">
                        <img src="../src/images/Vip-room.jpg" class="d-block w-100" alt="..." width="100%" height="100%">
                    </a>
                </div>

            </div>
        </div>

        <div class="row" style="padding:10px">
            <div class="col-8" align="right" style="padding:10px">
                <img src="../src/images/four-eight-stars.png" height="27px" width="151px">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8" style="padding:10px; border: 1px solid; max-height: 300px; overflow-y:auto; overflow-x:hidden">
                <h5>Reviews</h5>
                <div class="row" style="border: 1px solid; padding-left: 15px">
                    <div class="col-lg-2" style="padding-top: 10px">
                        <img src="../src/images/five-stars.png" alt="..." width="82px" height="15px">
                    </div>
                    <div class="col-lg-6" style="padding-top:10px">
                        <div class="row">
                            <p>
                                This is very nice hotel. I love it. I prefer to everyone. Entertainments are so good. Also this
                                website is perfect. I love it's design, too simple and minimal.
                            </p>

                        </div>
                        <div class="row" style="padding-top:15px">
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
                    </div>

                </div>
                <div class="row" style="border: 1px solid; padding-left: 15px">
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
                        <div class="row" style="padding-top:15px">
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
                    </div>

                </div>
                <div class="row" style="border: 1px solid; padding-left: 15px">
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
                        <div class="row" style="padding-top:15px">
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
                    </div>

                </div>

            </div>

            <div class="col-lg-3" style="border: 1px solid; max-height: 300px; ">
                <h5>Make an review</h5>
                <div class="row">
                    <link rel="stylesheet" href="rate.css">
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="5 stars">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="4 stars">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="3 stars">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="2 stars">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="1 star">1 star</label>
                    </div>
                </div>
                <div class="row" style="padding-top:30px">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comment</label>
                    </div>
                </div>
                <div class="row" style="padding-left: 80px; padding-right: 15px; padding-top: 30px; padding-bottom:15px">
                    <button type="button" class="btn btn-primary">Make Review</button>
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