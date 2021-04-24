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

            <nav class="navbar fixed-top navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <img src="../src/images/logo.png" alt="" width=50 height="30" class="d-inline-block align-text-top">
                        Paradis Hotel
                    </a>


                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.html" aria-disabled="true">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.html">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rooms.html">Rooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="reservations.html">Reservations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="login.php"><img src="../src/images/profile.png" width="35px" height="35px"></a>
                        </li>
                    </ul>

                </div>
            </nav>
        </header>

    </div>

    <div class="container" style="padding-top:20px; padding-bottom: 10px; background-color: #E8EAEF">

    </div>

    <?php
    $confirm = true;
    $email = $password = $emailError = $passwordError = "";
    $name = $nameError = $surname = $surnameError = $id = $idError = $phoneNumber = $phoneNumberError = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST")  {

        if (empty($_POST["name"])) {
            $nameError = "Name is required";
            $confirm = false;
        } else {
            $name = input($_POST["name"]);
        }
        if (empty($_POST["surname"])) {
            $surnameError = "Surname is required";
            $confirm = false;
        } else {
            $surname = input($_POST["surname"]);
        }
        if (empty($_POST["id"])) {
            $idError = "Id is required";
            $confirm = false;
        } else {
            $id = input($_POST["id"]);
        }
        if (empty($_POST["phoneNumber"])) {
            $phoneNumberError = "Phone number is required";
            $confirm = false;
        } else {
            $phoneNumber = input($_POST["id"]);
        }
        if (empty($_POST["email"]) || filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
            $emailError = "E-mail is required";
            $confirm = false;
        } else {
            $email = input($_POST["email"]);
        }
        if (empty($_POST["password"])) {
            $passwordError = "Password is required";
            $confirm = false;
        } else {
            $password = input($_POST["password"]);
        }

        if ($confirm){
            header("Location:login.php");
        }
    }
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <!--This is for content-->
    <div class="container" style="padding: 40px; border: 1px solid; margin-top: 70px; max-height: 2000px; max-width: 980px; background-color: #FFFFFF">
        <div class="col" align="center" style="padding-bottom: 50px">
            <img src="../src/images/profile_black.png" width="108px" height="108px">
            <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
                <div class="row" align="left" style="margin-top:40px">
                    <p><span class="error" style="color: #ff0000">all of them is required</span></p>
                    <div class="col-6">
                        <h5>Name</h5>
                        <div class="form-floating mb-3">
                            <input name="name" type="text" class="form-control" id="nameInput" placeholder="Your Name">
                            <label for="nameInput">Name</label>
                            <?php
                            echo $nameError;
                            ?>
                        </div>
                        <h5>Surname</h5>
                        <div class="form-floating mb-3">
                            <input name="surname" type="text" class="form-control" id="surnameInput" placeholder="Your Surname">
                            <label for="surnameInput">Surname</label>
                            <?php
                            echo $surnameError;
                            ?>
                        </div>
                        <h5>ID</h5>
                        <div class="form-floating mb-3">
                            <input name="id" type="number" class="form-control" id="IdInput" placeholder="ID">
                            <label for="IdInput">ID</label>
                            <?php
                            echo $idError;
                            ?>
                        </div>
                        <h5>Phone Number</h5>
                        <div class="form-floating mb-3">
                            <input name="phoneNumber" type="phone" class="form-control" id="phoneInput" placeholder="Eg. 555 555 55 55">
                            <label for="phoneInput">Phone Number</label>
                            <?php
                            echo $phoneNumberError;
                            ?>
                        </div>

                    </div>
                    <div class="col-6">
                        <h5>E-Mail</h5>
                        <div class="form-floating mb-3">
                            <input name="email" type="email" class="form-control" id="mailInput" placeholder="name@example.com">
                            <label for="mailInput">E-mail address</label>
                            <?php
                            echo $emailError;
                            ?>
                        </div>
                        <h5>Password</h5>
                        <div class="form-floating mb-3">
                            <input name="password" type="password" class="form-control" id="passwordInput" placeholder="password">
                            <label for="passwordInput">Password</label>
                            <?php
                            echo $passwordError;
                            ?>
                        </div>
                        <h5>Password (Again)</h5>
                        <div class="form-floating mb-3">
                            <input name="password" type="password" class="form-control" id="passwordInput2" placeholder="password">
                            <label for="passwordInput2">Password</label>
                            <?php
                            echo $passwordError;
                            ?>
                        </div>
                        <p><small>
                                - At least 8 characters - the more characters better<br>
                                - A mixture of both uppercase and lowercase letters<br>
                                - A mixture of numbers and letters<br>
                                - Inclusion of at least one special character, e.g., ! @ # ? ]<br>
                                <b>Note:</b> Don't use < or > in your password, as both can cause<br>
                                problems in web browsers
                            </small></p>
                        <div align="right" style="margin-top: 30px">
                            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 30px;
                                     padding-right: 30px; font-size: 22px">Register</button>
                        </div>

                    </div>
                </div>
            </form>
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