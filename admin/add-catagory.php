<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $catagory = $_POST['catagory'];
    $cata_id = $_POST['cata_id'];
    $status = 'Active';
    if (!empty($catagory) && !empty($cata_id)) {

        //save to database
        
        $query = "insert into catagory (catagory,cataid,Status) values ('$catagory','$cata_id','$status')";

        mysqli_query($con, $query);      
        
    } else {
        echo "Please enter some valid information!";
    }
}
?>
<html>

<head>
    <title>ZetaMod panel</title>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <div class="menu text-align-center">
        <div class="wrapper container">
            <div class="Loggedin">
                <h1>Logged in as <?php echo $user_data['username']; ?></h1>
            </div>
            <ul>
                <li><a href="index.php"><i class="bx bx-home"></i></a></li>
                <li><a href="manage-admin.php"><i class='bx bx-briefcase'></i></a></li>
                <li><a href="manage-catagory.php"><i class='bx bx-book-content'></i></a></li>
                <li><a href="manage-games.php"><i class='bx bx-game'></i></a></li>
                <li><a href="requests.php"><i class='bx bx-chat'></i></a></li>
                <li><a href="logout.php"><i class='bx bx-log-out-circle'></i></a></li>
            </ul>
        </div>

    </div>
    <!--menu section end-->
    <!--main content start-->
    <div class="main-content">
        <div class="wrapper container text-align-center">
            <h1><strong>Add Catagory</strong></h1>

            <form action="" method="POST">
                <table class="tbl-30">
                    <tr>
                        <td class="tdhed">Catagory Name:</td>
                        <td><input type="text" name="catagory" placeholder="Catagory Name"></td>
                    </tr>
                    <tr>
                        <td class="tdhead">Catagory ID:</td>
                        <td><input type="text" name="cata_id" placeholder="Catagory ID"></td>
                    </tr>
                </table>
                <input type="submit" name="submit" value="Add Catagory" class="btn-primary red">
            </form>


        </div>

    </div>
    <!--main content ends-->


    <!--footer section-->
    <div class="footer">
        <div class="wrapper container text-align-center">
            <p>All rights reserverd, Designed By <a href="https://github.com/Mickyx73">Mickyx73</a> and <a href="https://github.com/uchhasbarua">Uchhasbarua</a> </p>
        </div>
    </div>
    <!--footer Section-->

</body>

</html>