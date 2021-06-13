<?php
session_name("mgr");
session_start();
include("../src/database/connect_db.php");


$loginText = "<img src='../src/images/profile.png' width='35px' height='35px'>";
$loginLink = "";

if(isset($_SESSION["id"])) {
    $loginText = $_SESSION['name'];
    $loginLink = "profileInformations.php";

}
else{
    //$loginText = '<img src="../src/images/profile.png" width="35px" height="35px">';
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
                           <link rel="stylesheet" href="profileHoverDropdown.css">
                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <div class="dropdown">
                                        <a class="nav-link " href="<?php echo($loginLink); ?>"><?php echo($loginText); ?></a>
                                        <div class="dropdown-content">
                                            <ul >
                                                <li ><a href="profileInformations.php"  style="color:black">Information</a></li>
                                                <li ><a href="profilePassword.php" style="color:black">Change Password</a></li>
                                                <li ><a href="logout.php" style="color:black">Log Out</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </li>

                            </ul>

                        </div>
                    </div>

                </div>
            </nav>
