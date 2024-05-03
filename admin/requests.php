<?php
  session_start();

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);
?>
<html>

<head>
    <title>ZetaMod panel</title>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <!--menu section start-->
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
            <h1><strong>Requests</strong></h1>
            
            
            <table class="tbl-full text-align-center">
                <tr>
                    <th>SN</th>
                    <th>Email</th>
                    <th>User Name</th>
                    <th>Phone No.</th>
                    <th>Game Name</th>
                    <th>Actions</th>
                </tr>
                <?php
                $sql = "SELECT * FROM preorder";
                $res = mysqli_query($con, $sql);

                if ($res == TRUE) {
                    $rows = mysqli_num_rows($res);
                    $sn = 1;
                    if ($rows > 0) {
                        while ($rows = mysqli_fetch_assoc($res)) {
                            $sn = $rows['id'];
                            $email = $rows['email'];
                            $gamename = $rows['gamename'];
                            $contact = $rows['phonenumber'];
                            $name =$rows['name'];
                ?>
                            <tr>
                                <td><?php echo $sn++; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $contact; ?></td>
                                <td><?php echo $gamename; ?></td>
                                <td>
                                    <a href="" class="btn-primary del">Reject</a>
                                    <a href="#" class="btn-primary gre">Resolve</a>
                                </td>

                            </tr>
                <?php

                        }
                    } else {
                    }
                } else {
                }
                ?>

              
            </table>
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