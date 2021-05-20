<?php
    session_start();
    include("../src/database/connect_db.php");

    $loginText = "<img src='../src/images/profile.png' width='35px' height='35px'>";
    $loginLink = "";

    if(isset($_SESSION["id"])) {
        $loginText = $_SESSION['name'];
        $loginLink = "profile_accountDetails.php";
    }
    else{
        $loginText = '<img src="../src/images/profile.png" width="35px" height="35px">';
        $loginLink = "login.php";
    }
?>


            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <img src="../src/images/logo.png" alt="" width=50 height="30">
                        Paradis Hotel

                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse"  id="navbarSupportedContent">
                        <div class="col" align="left">
                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="index.php" aria-disabled="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gallery.html">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="rooms.php">Rooms</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="reservations.html">Reservations</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="<?php echo($loginLink); ?>">Welcome <?php echo($loginText); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </nav>
