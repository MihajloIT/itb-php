<?php
require_once "connection.php";

$poruka = "";
if(isset($_GET["p"]) && $_GET["p"] == "ok")
{
    $poruka = "You have successfully registered, please log to continue";
}

function elementiKlase($poruka)
{
    if(strlen($poruka) >0)
    {
        return "text-success-emphasis bg-success-subtle border border-success-subtle rounded-3 registered";
    }
    return "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network</title>
    <link rel="stylesheet" href="css/style.css">


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body class="index">

<header class="fixed-top d-flex align-items-cente">
    <div class="containter-fluid container-xl d-flex align-items-center justify-content-lg-between">
        <nav class="navbar order-last order-lg-0">
            <ul>
                <li><a href="index.php">Homepage</a></li>
                <li><a href="register.php">Sing Up</a></li>
                <li><a href="login.php">Log In</a></li>
            </ul>
        </nav>
    </div>
    <div>
    <h1>Welcome to our Social Network</h1>
    <p>Neki tekst o kompaniji</p>
    </div>
</header>


    <div class="p-1 <?php echo elementiKlase($poruka); ?>">
        <!-- Ovo zameniti ele iz bootstrapa ,      prozorcic pa da klijent iskljuci alert neki  -->
        <p> <?= $poruka;  ?> </p>
    </div>
    <!-- Slider ...-->
    <div class="col-xl-12 top-div">
        
        <p>New to our site? <a href="register.php" target="_blank">Register here</a> to access our site ! </p>
        <p>Alredy have the account? <a href="login.php" target="_blank"> Log here </a>to continue to our site !</p>
    </div>




</body>

</html>