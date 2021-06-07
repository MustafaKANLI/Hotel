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
            <div class="row" style="padding-right: 20px">
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

            <div class="row" style="overflow-x: auto; overflow-y: hidden; max-height: 150px; border: 1px solid; margin-top: 20px">
                <div class="col" style="padding:10px">
                    <a href="#">
                        <img src="../src/images/Vip-room.jpg" class="d-block w-100" alt="..." width="150px" height="100px">
                    </a>
                </div>
                <div class="col" style="padding:10px">
                    <a href="#">
                        <img src="../src/images/Vip-room.jpg" class="d-block w-100" alt="..." width="150px" height="100px">
                    </a>
                </div>
                <div class="col" style="padding:10px">
                    <a href="#">
                        <img src="../src/images/Vip-room.jpg" class="d-block w-100" alt="..." width="150px" height="100px">
                    </a>
                </div>
                <div class="col" style="padding:10px">
                    <a href="#">
                        <img src="../src/images/Vip-room.jpg" class="d-block w-100" alt="..." width="150px" height="100px">
                    </a>
                </div>
                <div class="col" style="padding:10px">
                    <a href="#">
                        <img src="../src/images/Vip-room.jpg" class="d-block w-100" alt="..." width="150px" height="100px">
                    </a>
                </div>
                <div class="col" style="padding:10px">
                    <a href="#">
                        <img src="../src/images/Vip-room.jpg" class="d-block w-100" alt="..." width="150px" height="100px">
                    </a>
                </div>
                <div class="col" style="padding:10px">
                    <a href="#">
                        <img src="../src/images/Vip-room.jpg" class="d-block w-100" alt="..." width="150px" height="100px">
                    </a>
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

