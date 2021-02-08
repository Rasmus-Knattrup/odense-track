<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/module.css">
    <link rel="stylesheet" href="css/state.css">
    <link rel="stylesheet" href="css/theme.css">
    <title>Odense Track</title>
</head>
<body>
<!-- WRAPPER -->
<div class="wrapper">
    <!-- HEADER -->
    <header class="header">
        <!-- TOP MENU -->
        <div class="top-menu">
            <div class="top-menu-box">
                <?php if ( isset( $_SESSION["id"] ) ) { echo '<a class="logout-link" href="includes/logout.inc.php">Log ud</a>'; }  ?>
                <span class="support">SUPPORT:</span>
                <img class="lettericon" src="img/lettericon.png" alt="">
                <a class="ordernow" href="login.php">BESTIL NU</a>
            </div>
        </div>

        <!-- MAIN-HEADER -->
        <div class="main-header">
            <div class="headerlogo-frame">
                <a class="headerlogo-link" href="index.php">
                <img class="headerlogo" src="img/headerlogo.png" alt="">
            </div>
            <div class="aboutus-nav">
                <ul class="aboutus-nav-ul">
                    <li>
                        <a class="aboutus-link" href="#">Om Odense Track</a>
                    </li>

                    <span class="line">|</span>

                    <li>
                        <a class="aboutus-link" href="#">Kontakt os</a>
                    </li>

                    <li class="search">
                        <img class="search-icon" src="img/searchicon.png" alt="?">
                        <span class="search-label">SØG</span>
                        <input class="search-input" type="text">
                    </li>
                </ul>
            </div>
        </div>

        <!-- MAIN-NAV -->
        <nav class="main-nav">
            <ul class="main-nav-ul">
                <li>
                    <a href="#" class="main-nav-link formal-padding">FORMAL 1</a>
                </li>

                <li>
                    <!-- Update Events link (admin only) -->
                    <?php if ( isset( $_SESSION["id"] ) && $_SESSION["id"] == 1 ) : ?>
                    <a href="includes/events.inc.php" class="main-nav-link">EVENTS</a>

                    <!-- Overview of Events -->
                    <?php else : ?>
                    <a href="events.php" class="main-nav-link">EVENTS</a>
                    <?php endif; ?>
                </li>

                <li>
                    <!-- Update News link (admin only) -->
                    <?php if ( isset( $_SESSION["id"] ) && $_SESSION["id"] == 1 ) : ?>
                    <a href="includes/news.inc.php" class="main-nav-link">NYHEDER</a>

                    <!-- Overview of News -->
                    <?php else : ?>
                    <a href="news.php" class="main-nav-link">NYHEDER</a>
                    <?php endif; ?>
                </li>
            </ul>
        </nav>

    </header>