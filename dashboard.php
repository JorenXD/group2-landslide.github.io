<?php
// Initialize the session
session_start();
include_once('config.php');
$query="select"
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>

<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span> <span>Group 2</span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard.php" class="active"><span class="las la-users"></span>
                        <span>Home</span></a>
                </li>
                <li>
                    <a href="sensor-data.php"><span class="las la-clipboard-list"></span>
                        <span>Sensor Data</span></a>
                </li>
                <li>
                    <a href="about.php"><span class="las la-user-circle"></span>
                        <span>About</span></a>
                </li>
            </ul>
        </div>
    </div>

       
    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>Landslide Detection: An Early Alert Using Fuzzy Logic Algorithm
            </h2>
            
            <div class="user-wrapper">
                <small><a href="logout.php">Logout</a></small>
            </div>
        </header>

        <main>
            <div>
                
            </div>
        </main>

    </div>

    



</body>

</html>