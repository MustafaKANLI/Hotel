<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Contact</title>
</head>

<!--This is for Hotel's contact page -->


<body style="background-color: #F4F6FC">

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

    <div class="container" style="padding-top:20px; padding-bottom: 10px; background-color: #E8EAEF"></div>

    <!--This is for content-->
    <div class="container" style="padding: 40px; border: 1px solid; margin-top: 70px; max-height: 1600px; max-width: 900px; overflow:auto; background-color: #FFFFFF">
        <div class="row" align="center">
            <h4>You can contact with me using these ways:</h4>
        </div>
        <div class="row" align="center" style="padding-top: 40px">
            <div class="col" align="center">
                <img src="../src/images/mail.png" width="70px" height="70px">
            </div>
            <div class="col" align="left" style="padding-top: 15px">
                <a><button type="button" class="btn btn-outline-secondary">mustafakanli98@gmail.com</button></a>
            </div>
        </div>
        <div class="row" align="center" style="padding-top: 40px">
            <div class="col" align="center">
                <img src="../src/images/phone.png" width="70px" height="70px">
            </div>
            <div class="col" align="left" style="padding-top: 15px">
                <a><button type="button" class="btn btn-outline-danger">+212 123 456 789</button></a>
            </div>
        </div>
        <div class="row" align="center" style="padding-top: 40px">
            <div class="col" align="center">
                <img src="../src/images/konum.png" width="70px" height="110px">
            </div>
            <div class="col" align="left" style="padding-top: 35px">
                <a href="https://goo.gl/maps/uV5zSMhTZrq9hMJu5" target="_blank"><button type="button" class="btn btn-outline-info">Lara/Antalya</button></a>

            </div>
        </div>
        <div class="row" align="center" style="padding-top: 40px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6385.242604153256!2d30.7458714!3d36.
                8515447!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c39adf65b00089%3A0x33478e4af6aba830!2sLara%20Cd.%2C%20Muratpa%C5%9Fa%2FAntalya!
                5e0!3m2!1str!2str!4v1621544547235!5m2!1str!2str" height="400px" width="550px" style="border:0; allowfullscreen="" loading="lazy"></iframe>
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