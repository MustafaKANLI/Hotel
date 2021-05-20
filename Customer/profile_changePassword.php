<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Change Password</title>
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

    </div>

    <!--This is for content-->
    <div class="container" style="padding: 40px; border: 1px solid; margin-top: 70px; max-height: 800px; max-width: 980px; background-color: #FFFFFF">
        <div class="col" align="center" style="padding-bottom: 50px">
            <form action="profile_changePassword.php" method="POST">
            <h2>Change Password</h2>
            <div class="row" align="left" style="margin-top:40px">
                <div class="col-4">
                    <div class="list-group">
                        <a href="profile_accountDetails.php" class="list-group-item list-group-item-action">
                            Account Details
                        </a>
                        <a href="reservations.html" class="list-group-item list-group-item-action">Reservations</a>
                        <a href="profile_changePassword.php" class="list-group-item list-group-item-action active">Change Password</a>
                        <a href="profile_reviews.html" class="list-group-item list-group-item-action">Reviews</a>

                    </div>
                </div>
                <div class="col-8">
                    <h5>Old Password</h5>
                    <div class="form-floating mb-3">
                        <input type="password" name="old_password" class="form-control" id="passwordInput" placeholder="password">
                        <label for="passwordInput">Password</label>
                    </div>
                    <h5>New Password</h5>
                    <div class="form-floating mb-3">
                        <input type="password" name="new_password" class="form-control" id="passwordInput" placeholder="password">
                        <label for="passwordInput">Password</label>
                    </div>

                    <h5>New Password (Again)</h5>
                    <div class="form-floating mb-3">
                        <input type="password" name="new_passwordAgain" class="form-control" id="passwordInput" placeholder="password">
                        <label for="passwordInput">Password</label>
                    </div>
                    <pre><small>
- At least 8 characters - the more characters better
- A mixture of both uppercase and lowercase letters
- A mixture of numbers and letters
- Inclusion of at least one special character, e.g., ! @ # ? ]
<b>Note:</b> Don't use < or > in your password, as both can cause
problems in web browsers
                    </small></pre>

                    <div align="right" style="margin-top: 30px">
                        <a >
                            <button type="button" class="btn btn-primary btn-lg" style="padding-left: 30px; padding-right: 30px;
                            font-size: 22px" data-bs-toggle="modal" data-bs-target="#bookingAlert">Save Changes</button>
                        </a>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="bookingAlert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content" align="left">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Do You Want To Continue?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cancel" ></button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        Your password will be changed!!!!
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit"  class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
                                </div>
                            </div>
                        </div>
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
<?php
    include("../src/database/connect_db.php");
    if(isset($_POST["old_password"],$_POST["new_password"],$_POST["new_passwordAgain"],$_POST["phoneNumber"],$_POST["email"],
        $_POST["password"],$_POST["passwordAgain"])){

        $oldPassword = $_POST["old_password"];
        $newPassword = $_POST["new_password"];
        $newPasswordAgain = $_POST["new_passwordAgain"];

        //$password = password_hash($password, PASSWORD_DEFAULT);

        $update = "UPDATE customers
                   SET password = '".$newPassword."'
                   WHERE customers.id = '".$_SESSION['id']."'";

        if($conn -> query($update)===TRUE){
            //echo "Başarılı";
        }



    }
?>