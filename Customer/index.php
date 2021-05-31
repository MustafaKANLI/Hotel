
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Home</title>
</head>
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

    <div class="container" style="padding-top:20px; padding-bottom: 10px; background-color: #E8EAEF">
        <h2>Home</h2>
    </div>

    <?php
        $price = $rate = $roomtype = "";

        $selectPrice = $conn -> query("SELECT *
        FROM roomprices
        ORDER BY roomprices.price DESC");

        $arr = $selectPrice -> fetch_assoc();

        $selectRateVipRoom = $conn -> query("SELECT * FROM comments 
                                                    WHERE roomtype = 'Vip'");

        $selectRateFamilyRoom = $conn -> query("SELECT * FROM comments 
                                                    WHERE roomtype = 'Family'");

        $selectRateDoubleRoom = $conn -> query("SELECT * FROM comments 
                                                    WHERE roomtype = 'Family'");

        $selectRateSingleRoom = $conn -> query("SELECT * FROM comments 
                                                    WHERE roomtype = 'Single'");



        function avgRate($select){
            $total = $index = 0;
            while($rateRoom = $select-> fetch_assoc()){
                $total += (double) $rateRoom['rate'];
                $index++;
            }
            return ($avg = $total/$index);
        }


    ?>

    <!--This is for content-->
    <div class="container" style="padding: 40px; border: 1px solid; background-color: #FFFFFF">
        <div class="row">
            <div class="col-lg" style="padding-top:30px; padding-bottom: 30px; padding-right: 20px; margin-right: 20px">
                <div class="row" style="box-shadow: 5px 5px 5px 5px grey; margin-bottom: 50px; padding-top: 10px; padding-bottom: 10px">
                    <div class="col-sm-6">
                        <img class="rounded" src="../src/images/Vip-room.jpg" width="260" height="180" />
                    </div>

                    <div class="col-sm-6" align="left">
                        <div class="row" >
                            <div class="row">
                                <button type="button" class="btn btn-primary"> <?php echo $arr['roomtype'] ?> Room</button>
                            </div>
                            <div class="row" style="padding-top: 15px">
                                <div class="col-7">
                                    <p> <?php
                                        echo $arr['price']
                                        ?> </p>
                                </div>
                                <div class="col">
                                    <p> <?php echo avgRate($selectRateVipRoom); ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row" style="box-shadow: 3px 3px 4px 4px grey; margin-top: 50px; margin-bottom: 50px; padding-top: 10px; padding-bottom: 10px">
                    <div class="col-sm-6">
                        <img class="rounded" src="../src/images/Vip-room.jpg" width="260" height="180" />
                    </div>

                    <div class="col-sm-6" align="left">
                        <div class="row" >
                            <div class="row">
                                <button type="button" class="btn btn-primary"><?php
                                    $arr = $selectPrice -> fetch_assoc();
                                    echo $arr['roomtype']
                                    ?> Room</button>
                            </div>
                            <div class="row" style="padding-top: 15px">
                                <div class="col-7">
                                    <p> <?php
                                        //$arr = $selectPrice -> fetch_assoc();
                                        echo $arr['price']
                                        ?> </p>
                                </div>
                                <div class="col">
                                    <p> <?php echo avgRate($selectRateFamilyRoom); ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row" style="box-shadow: 5px 5px 5px 5px grey; margin-top: 50px; margin-bottom: 50px; padding-top: 10px; padding-bottom: 10px">
                    <div class="col-sm-6">
                        <img class="rounded" src="../src/images/Vip-room.jpg" width="260" height="180" />
                    </div>

                    <div class="col-sm-6" align="left">
                        <div class="row" >
                            <div class="row">
                                <button type="button" class="btn btn-primary"><?php
                                    $arr = $selectPrice -> fetch_assoc();
                                    echo $arr['roomtype']
                                    ?> Room</button>
                            </div>
                            <div class="row" style="padding-top: 15px">
                                <div class="col-7">
                                    <p> <?php
                                        //$arr = $selectPrice -> fetch_assoc();
                                        echo $arr['price']
                                        ?> </p>
                                </div>
                                <div class="col">
                                    <p> <?php echo avgRate($selectRateDoubleRoom); ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row" style="box-shadow: 5px 5px 5px 5px grey; margin-top: 50px; margin-bottom: 50px; padding-top: 10px; padding-bottom: 10px">
                    <div class="col-sm-6">
                        <img class="rounded" src="../src/images/Vip-room.jpg" width="260" height="180" />
                    </div>

                    <div class="col-sm-6" align="left">
                        <div class="row" >
                            <div class="row">
                                <button type="button" class="btn btn-primary"><?php
                                    $arr = $selectPrice -> fetch_assoc();
                                    echo $arr['roomtype']
                                    ?> Room</button>
                            </div>
                            <div class="row" style="padding-top: 15px">
                                <div class="col-7">
                                    <p> <?php
                                        //$arr = $selectPrice -> fetch_assoc();
                                        echo $arr['price']
                                        ?> </p>
                                </div>
                                <div class="col">
                                    <p> <?php echo avgRate($selectRateSingleRoom); ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



            </div>


            <div class="col-md-3">
                <div class="row" style="padding-top:30px">

                        <div class="row" style="margin-bottom: 150px">
                            <form action="rooms_available.php" method="POST">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select Room Types</option>
                                <option value="1">Vip Room</option>
                                <option value="2">Family Room</option>
                                <option value="3">Double Room</option>
                                <option value="3">Single Room</option>
                            </select>
                            </form>

                        </div>
                        <div class="row" style="margin-bottom: 150px">
                            <form action="rooms_available.php" method="POST">
                            <!--This is for select check in date-->
                            <label for="dateInput" class="form-label">Check-in Date</label>
                            <input type="date" class="form-control" id="dateInput">
                            </form>
                        </div>

                </div>

            </div>
            <div class="col-md-3">
                <div class="row" style="padding-top:30px">

                        <div class="row" style="margin-bottom: 150px">
                            <form action="rooms_available.php" method="POST">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select Number Of Person</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3-4</option>
                            </select>
                            </form>

                        </div>
                        <div class="row" style="margin-bottom: 150px">
                            <!--This is for select check out date-->
                            <form action="rooms_available.php" method="POST">
                            <label for="dateInput1" class="form-label">Check-out Date</label>
                            <input type="date" class="form-control" id="dateInput1">
                            </form>
                        </div>
                        <div class="row" align="right" style="padding-top: 450px">
                            <a href="rooms_available.php">
                                <button class="btn btn-secondary" type="submit" style="padding-left: 55px; font-size: 22px; padding-right: 55px">Book</button>
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
