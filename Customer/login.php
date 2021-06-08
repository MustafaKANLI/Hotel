
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

            <title>Login</title>
        </head>
        <body style="background-color: #F4F6FC">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <div class="container" style="background-color:#E8EAEF">
            <!--This is for Header, navbar-->
            <div class="container shadow-sm p-3 mb-5 bg-body rounded" style="background-color: #f3f4ed">
                <header class="header">
                    <?php
                        require ("header.php");

                    if(isset($_SESSION['id'])){
                        header("Location:profile_accountDetails.php");
                        exit();
                    }
                    ?>
                </header>

            </div>
            <?php
            //session_start();
            include("../src/database/connect_db.php");

            $email = $password = $emailError = $passwordError = $wrongPassOrEmail = $userNotFound = "";

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $email = input($_POST['email']);
                $password = input($_POST['password']);
                //$password = password_hash($password);


                if (empty($_POST["email"])) {
                    $emailError = "Email is required";
                    //$confirm = false;
                } else {
                    $email = input($_POST["email"]);
                }
                if (empty($_POST["password"])) {
                    $passwordError = "Password is required";
                    //$confirm = false;
                } else {
                    $password = input($_POST["password"]);
                    $password = md5($password);
                }

                $selectSql = $conn -> query("SELECT * FROM `customers` 
                                        WHERE   email = '".$email."'");
                $user = $selectSql->fetch_assoc();

                if($user){ // if user exist
                    if($password === $user['password']){ //login successful
                        $_SESSION['id'] = $user['id'];
                        $_SESSION['name'] = $user['fname'];
                        $_SESSION['surname'] = $user['lname'];
                        $_SESSION['email'] = $user['email'];
                        $_SESSION['phone'] = $user['phonenumber'];


                        //echo "Successful";
                        header("Location:index.php");
                    }
                    else{
                        $wrongPassOrEmail = "Wrong password or e-mail address";
                    }

                }
                else{
                    $userNotFound = "User not found";
                }
            }

            function input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            ?>

            <div class="container" style="padding-top:20px; padding-bottom: 10px; background-color: #E8EAEF">

            </div>

            <!--This is for content-->
            <div class="container" style="padding: 40px; border: 1px solid; margin-top: 70px; max-height: 860px; max-width: 600px; background-color: #FFFFFF">
                <div class="col" align="center">
                    <img src="../src/images/profile_black.png" width="108px" height="108px">

                    <div class="row" align="left" style="margin-top:40px">
                        <?php echo $userNotFound; ?>
                        <form action="<?php // echo $_SERVER["PHP_SELF"]?>" method="POST">
                            <h5>E-Mail</h5>
                            <div class="form-floating mb-3">
                                <input name="email" type="email" class="form-control" id="mailInput" placeholder="name@example.com">
                                <label for="mailInput">E-mail address</label>
                                <?php
                                echo $emailError;
                                ?>
                            </div>
                            <h5>Password</h5>
                            <div class="form-floating">
                                <input name="password" type="password" class="form-control" id="passwordInput" placeholder="password">
                                <label for="passwordInput">Password</label>
                                <?php
                                echo $passwordError;
                                ?>
                            </div>
                            <div align="center" style="margin-top: 10px">
                                <a href="userRegister.php" style="color:black"><p >Don't you have an account? <b><ins>Create an Account</ins></b></p></a>
                            </div>
                            <div align="center" style="margin-top: 10px; color: red">
                                <?php
                                echo $wrongPassOrEmail;
                                ?>
                            </div>
                            <div align="center" style="margin-top: 30px">
                                <button type="submit" class="btn btn-outline-primary btn-lg" style="padding-left: 15px;padding-right: 15px">Login</button>

                            </div>
                        </form>

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

