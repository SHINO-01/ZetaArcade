<?php


include("connection.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $name = $_POST['name'];
    $gamename = $_POST['gamename'];
    $email =  $_POST['email'];
    $phone =  $_POST['phone'];
    if (!empty($name) && !empty($gamename) && !empty($email) && !empty($phone)) {

        //save to database

        $query = "insert into preorder (email,gamename,name ,phonenumber) values ('$email','$gamename','$name','$phone')";

        mysqli_query($con, $query);



        echo "Preorder success";
    } else {
        echo "Please enter some valid information!";
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon-16x16.png" />
    <title>Game Request Form</title>

    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />

    <script src="js/main.js"></script>
    <script src="js/swiper-bundle.min.js"></script>

    <link ref="stylesheet" type="text/css" href="dist/snackbar.min.css" />
    <script src="dist/snackbar.min.js"></script>



</head>

<body>
    <!-- Navbar section Start-->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <img src="img/zetalogo.png" alt="ZetaArcade logo" class="logo-res" />
            </div>
            <div class="banner">
                <img src="img/zeta_arcade.png" alt="banner" class="logo-res" />
            </div>

            <div class="menu text-align-right logo-res">
                <ul>
                    <li>
                        <a href="index.html"><i class="bx bx-home"></i></a>
                    </li>
                    <li>
                        <a href="admin/manage-admin.php"><i class="bx bxs-user-circle"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="bx bx-support"></i></a>
                    </li>
                <!--    <li>
                        <a href="#"><i class="bx bxs-bell-ring"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="bx bx-menu"></i></a>
                    </li>-->
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section End-->

    <!--Request form starts-->

    <style type="text/css">
        #text {

            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 30%;
        }

        #button {

            padding: 10px;
            width: fit-content;
            color: white;
            background-color: #fa5353;
            border-radius: 25px;
            border: none;
            font-size: 25px;
            font-weight: 700;
        }

        .heading h2 {
            padding: 1%;
        }

        label {
            color: white;
            text-align: left;
            padding: 10px;
            margin-right: 10px;
            font-size: 40px;
        }

        .container input[type="text"] {
            width: 50%;
            padding: 10px;
            font-size: 20px;
            border: none;
            border-radius: 10px;
            color: #4b4f93;
            font-weight: bold;
            height: auto;
        }
        .container input[type="email"] {
            width: 50%;
            padding: 10px;
            font-size: 20px;
            border: none;
            border-radius: 10px;
            color: #4b4f93;
            font-weight: bold;
            height: auto;
        }
        .container input[type="phone"] {
            width: 50%;
            padding: 10px;
            font-size: 20px;
            border: none;
            border-radius: 10px;
            color: #4b4f93;
            font-weight: bold;
            height: auto;
        }
    </style>

    <section class="sign game-search text-align-center logo-res">
        <div class="container">
            <form method="post">
                <div class="heading align-top text-align-centre">
                    <h2>Pre-Order</h2>
                </div>


                <label>email: </label><input id="text" type="email" name="email"><br><br>

                <label>User name: </label> <input id="text" type="text" name="name"><br><br>
                <label>game name:</label><input id="text" type="text" name="gamename"><br><br>
                <label>phone:</label><input id="text" type="phone" name="phone"><br><br>

                <input id="button" type="submit" value="Request"><br><br>


            </form>
        </div>
    </section>


    <!--Request form ends-->

    <!-- Socials section Start-->
    <section class="socials">
        <div class="container text-align-center">
            <div class="heading align-top">
                <h2 class="text-align-center">
                    <i class="fa-light fa-hashtag"></i>Find Us on our Socials!
                </h2>
            </div>
            <div class="menu text-align-center logo-res">
                <ul>
                    <li>
                        <a href="#"><img src="https://img.icons8.com/nolan/64/discord-logo.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="https://img.icons8.com/nolan/64/twitter.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="https://img.icons8.com/nolan/64/steam--v2.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="https://img.icons8.com/nolan/64/reddit.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="https://img.icons8.com/nolan/64/twitch.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="https://img.icons8.com/nolan/64/overwatch.png" /></a>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <!-- Socials Section End-->

    <!-- Footers section Start-->
    <section class="footer">
        <div class="container text-align-center">

            <p>All rights reserverd, Designed By Mickyx73 and Uchhasbarua</p>
        </div>
    </section>
    <!-- Footers Section End-->

</body>

</html>