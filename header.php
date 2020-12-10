<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeHelper</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/prettify-css.css">
    <script src="https://kit.fontawesome.com/44254eeb73.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
</head>

<body>
    <div id="site-wrapper">
        <header>
            <div class="header-wrapper">
                <h1 id="logo"><a href="index.php">CodeHelper</a></h1>
                <input type="checkbox" id="nav-toggle" class="nav-toggle">
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="booking.php">Booking</a></li>
                        <?php
                            if (isset($_SESSION["useruid"])) {
                                echo "<li><a href='booking.php'>Logged in as " . $_SESSION["useruid"] . "</a></li>";
                                echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
                            } else {
                                echo "<li><a href='signup.php'>Sign Up</a></li>";
                                echo "<li><a href='login.php'>Log In</a></li>";
                            }
                        ?>
                    </ul>
                </nav>
                <label for="nav-toggle" class="nav-toggle-label">
                    <span></span>
                </label>
            </div>
        </header>