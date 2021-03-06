<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Basic Page Needs
================================================== -->
<title>Hireo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/blue.css">
</head>
<body>
    <!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth">

<!-- Header -->
<div id="header">
    <div class="container">
        
        <!-- Left Side Content -->
        <div class="left-side">
            
            <!-- Logo -->
            <div id="logo">
                <a href="index.php"><img src="images/logo.png" data-sticky-logo="images/logo2.png" data-transparent-logo="images/logo2.png" alt=""></a>
            </div>

            <!-- Main Navigation -->
            <nav id="navigation">
                <ul id="responsive">

                    <li><a href="index.php">Home</a></li>
                    <li><a href="search-jobs.php">Job offers</a> </li>
                    <li><a href="kompanije.php">List of comapnies</a></li>
                    
                </ul>
            </nav>
            <div class="clearfix"></div>
            <!-- Main Navigation / End -->
            
        </div>
        <!-- Left Side Content / End -->


        <!-- Right Side Content / End -->
        <div class="right-side" style="padding: 25px 0">
        <a href="index.php" style="color:black"><i class="icon-material-outline-power-settings-new"></i> Logout</a>

            </div>
            <!-- User Menu / End -->

            <!-- Mobile Navigation Button -->
            <span class="mmenu-trigger">
                <button class="hamburger hamburger--collapse" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </span>

        </div>
        <!-- Right Side Content / End -->

    </div>
</div>
<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->
</body>
</html>