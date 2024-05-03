<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $id = $_POST['id'];
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $rating = $_POST['rating'];
    $status = 'Active';
    if (!empty($id) && !empty($title)) {

        //save to database
        
        $query = "insert into games (id,title,genre,rating,status) values ('$id','$title','$genre','$rating','$status')";

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
            <h1><strong>Add Game</strong></h1>

            <form action="" method="POST" enctype="multipart/form-data">
                <table class="tbl-30 text-align-center">
                    <tr>
                        <td class="tdhed">Game ID:</td>
                        <td><input type="text" name="id" placeholder="Game ID"></td>
                    </tr>
                    <tr>
                        <td class="tdhead">Title:</td>
                        <td><input type="text" name="title" placeholder="Title"></td>
                    </tr>
                    <tr>
                        <td class="tdhead">Genre:</td>
                        <td><input type="text" name="genre" placeholder="Genre"></td>
                    </tr>
                    <tr>
                        <td class="tdhead">Rating:</td>
                        <td><input type="text" name="rating" placeholder="Rating"></td>
                    </tr>
                    <tr>
                        <td class="tdhead">Image:</td>
                        <td><input type="text" name="img" placeholder="Image"></td>
                    </tr>
                </table>
                <input type="submit" name="submit" value="Add Game" class="btn-primary red">
            </form>


        </div>

    </div>
    <!--main content ends-->

    
    <!--footer section-->
    <div class="footer">
        <div class="wrapper container text-align-center">
        <p>All rights reserverd, Designed By <a href="https://github.com/Mickyx73">Mickyx73</a>  and <a href="https://github.com/uchhasbarua">Uchhasbarua</a> </p>
        </div>
    </div>
    <!--footer Section-->

</body>

</html>