<?php
session_start();

// Check for an alert message
if (isset($_SESSION['alert'])) {
    echo '<script>alert("' . $_SESSION['alert'] . '");</script>';
    unset($_SESSION['alert']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap 4 Responsive Dashboard Card Design</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- bootstrap link -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- real-time dht11 -->
    <script type="text/javascript" src="assets/js/jquery-3.4.0.min.js"></script>  
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="jquery/jquery-latest.js"></script>

    <!-- untuk ldr boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <!-- Add this to the head section of your HTML -->
    <script src="https://cdn.jsdelivr.net/gh/toorshia/justgage@1.4.0/dist/justgage.min.js"></script>

    <!-- ni yng bhgian bwah -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <!-- ldr coding -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- test -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!-- icon -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- home icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- temperature icon -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


    <!-- call data grafik & real-time-->
    <script type="text/javascript">
        var refreshid = setInterval(function(){
            $("#tempmonitor").load("tempmonitor.php");
            $("#hummonitor").load("hummonitor.php");
            $("#chart").load("chart.php");
            $("#chart2").load("chart2.php");

            // ldr
            $("#intensity").load("sensor.php");
            $("#intensity1").load("chart3.php");
            // $("#status").load("status.php");
        }, 5000);
    </script>

<style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background: #DFC696;
    font-family: 'Rubik', sans-serif;
}
.card-box {
    position: relative;
    color: #fff;
    padding: 20px 10px 40px;
    margin: 10px 0px;
}
.card-box:hover {
    text-decoration: none;
    color: #f1f1f1;
}
.card-box:hover .icon i {
    font-size: 100px;
    transition: 1s;
    -webkit-transition: 1s;
}
.card-box .inner {
    padding: 5px 10px 0 10px;
}
.card-box h3 {
    font-size: 27px;
    font-weight: bold;
    margin: 0 0 8px 0;
    white-space: nowrap;
    padding: 0;
    text-align: left;
}
.card-box p {
    font-size: 15px;
}
.card-box .icon {
    position: absolute;
    top: auto;
    bottom: 5px;
    right: 5px;
    z-index: 0;
    font-size: 72px;
    color: rgba(0, 0, 0, 0.15);
}
.card-box .card-box-footer {
    position: absolute;
    left: 0px;
    bottom: 0px;
    text-align: center;
    padding: 3px 0;
    color: rgba(255, 255, 255, 0.8);
    background: rgba(0, 0, 0, 0.1);
    width: 100%;
    text-decoration: none;
}
.card-box:hover .card-box-footer {
    background: rgba(0, 0, 0, 0.3);
}
.bg-red {
    background-color: #F75858 !important;
}
.bg-blue {
    background-color: #42E2E5 !important;
}
.bg-khaki {
    background-color: #F5BD4F!important;

}
/* navbar */
@import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');

.container {
    /* max-width: 100%; */
    max-width: 1200px;
    margin: 0 auto;
    overflow: hidden;
}
.sidebar{
   position: fixed;
   width: 250px;
   top:0;
   left: 0;
   bottom: 0;
   background: #A2BCBC;
   padding-top: 50px;
   text-align: left;
}

.sidebar img {
    margin-left: 20px;
    display: block; /* Hide the image by default */
}
/* max-width:1115px */
        @media (max-width: 1115px) {
            .main {
        width: calc(100% - 60px);
        left: 60px;
    }
            .sidebar {
        width: 60px;
    }
            /* Show image and text for screens wider than 768px */
            .sidebar img {
                display: none;
            }
            .try {
        display: none;
    }

            .sidebar ul li.home-icon a span {
                display: inline;
                margin-left: 10px;
            }
            .sidebar ul li.home-icon a span,
    .sidebar ul li a div {
        display: none;
    }

            .sidebar ul li.home-icon a i {
                min-width: 60px;
                font-size: 24px;
                margin-right: 10px;
            }
            .head-img {
        text-align: center;
        margin-left: 0;
        width: 100px;
    }

    .head-img img {
        width: 100%; /* Make the image fill the container width */
        margin: 0 auto; /* Center the image horizontally */
    }
        }

.sidebar h1{
   /* display: flex; */
   /* padding: 10px 20px; */
   /* color: #fff; */
   /* margin-left:10px; */
   /* text-decoration: none; */
   /* font-family: "Rubik"; */
   /* letter-spacing: 2px; */
   /* font-weight: 400; */
   /* margin: 0; */
   /* font-size: 25px; */
   /* text-transform: uppercase; */
}

.sidebar ul li.home-icon a {
    display: flex;
    align-items: center;
    font-family: "Rubik";
    letter-spacing: 2px;
    font-size: 15px;
    text-align: left;
    margin-left: 10px;
}

.home-icon{
    color: #fff;
    display: flex;

}

.try{
    margin-left: 27px;
    font-weight:bold;
    color: #fff;
}

.sidebar ul li.home-icon a i {
    min-width: 60px;
    font-size: 24px;
}

.sidebar ul li h1 i{
    margin-right:20px;
    
}

.sidebar a:hover{
   color: #fff;
   margin-left: 20px;
   transition: 0.4s;
}
.sidebar ul {
    margin-top: 20px;
    font-size: 15px;
    font-family: "Rubik";
    letter-spacing: 2px;
    text-align: left;
}

.sidebar ul li {
    width: 100%;
    list-style: none;
}

.sidebar ul li a {
    width: 100%;
    text-decoration: none;
    color: #fff;
    height: 60px;
    display: flex;
    align-items: center;
    text-align: left;
}

.sidebar ul li a i {
    min-width: 60px;
    font-size: 24px;
    /* text-align: center; */
}

.main-content {
    margin-left: 25%;
    padding: 20px;
}
</style>

</head>
<body>
    <div class="container">
        <!-- logo  -->
        <div class="container" style="margin-left: 50%; margin-top:40px;">
            <div class="head-img">
                <img src="images/security.png" width="200px">
            </div>
        </div>
        <div class="sidebar">
            <ul>
                <li class="home-icon">
                        <i class="fa fa-home" style="font-size:32px"></i>
                        <span class="try" style="font-size:24px;">HOME</span>
                </li>
                <li>
                    <a href="formindex.php">
                        <i class="fas fa-th-large"></i>
                        <div>Complaint form</div>
                    </a>
                </li>
                <li>
                    <a href="dashboard.php">
                        <i class='fab fa-wpforms'></i>
                        <div>Form Dashboard</div>
                    </a>
                </li>
                
                <li>
                    <a href="https://wa.me/601131455282?text=Hi i would like to know about your page">
                        <i class='fas fa-project-diagram'></i>
                        <div>Contact</div>
                    </a>
                </li>
                
            </ul>
        </div>

        <div class="main-content">
            <div class="row">
                <div class="col-sm-6" style="text-align: center;">
                    <div class="card-box bg-red">
                        <div class="inner">
                            <h1 style="color:#111;"> Temperature Dashboard </h1>
                            <!-- h3 / h1 ade effect ye -->
                            <h1><span id="tempmonitor">0</span></h1>                    
                        </div>
                        <div class="icon">
                        <i class="fas fa-temperature-low" aria-hidden="true"></i>
                        </div>
                        <a href="chart.php" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- style="margin-left:100px;" -->
                <div class="col-sm-6">
                    <div class="card-box bg-blue" style="text-align: center;">
                        <div class="inner">
                            <h1 style="color:#111;"> Humidity Dashboard </h1>
                            <!-- h3 / h1 ade effect ye -->
                            <h1> <span id="hummonitor"> 0 </span> </h1>
                        </div>
                        <div class="icon">
                            <i class="fas fa-tint" aria-hidden="true"></i>
                        </div>
                        <a href="chart2.php" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6" style="text-align: center;">
                    <div class="card-box bg-khaki" style="padding: 18px;">
                        <div class="inner">
                            <h1 style="color:#111;"> Ultrasonic Dashboard </h1>
                            <!-- h3 / h1 ade effect ye -->
                            <h1> <span id="intensity"> 0 </span> </h1>
                            <h1><div id="intensity1"> Hello</div></h1>
                            <!-- <h1> <span id="status"> Hello </span> </h1> -->
                        </div>
                        <div class="icon">
                            <i class="fas fa-street-view" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
            
</body>
</html>