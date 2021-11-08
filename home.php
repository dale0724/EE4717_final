<?php
session_start()
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Cinema Home</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="myStyle.css" />
</head>

<body style="margin: 0;">
    <header class="topnav">
        <img src="pics/logo.png">
        <a href="upcoming.php">Upcoming</a>
        <a href="now-showing.php">Now Showing</a>
        <a class="active" href="home.php">Home</a>
    </header>
    <div class="wrapper functionArea">
        <div class="searchBox">
            <?php
                if(isset($_SESSION['valid_user']))
                {
                    echo '<form class="userForm" method="POST" action="userDetail.php">';
                    echo '<h2>Hi, '.$_SESSION['valid_user'].'</h2><a href="logout.php">log out </a>';
                    echo '<input type="submit" value="My tickets" >';
                    echo '</form>';
                }
                else{
                    echo ('
                    <form class="userForm" method="POST" action="logIn.html">
                    <input type="submit" value="Log in" >
                    </form>
                    ');
                }
            ?>
            <form class="searchForm" method="POST" action="search.php">
                <select name="TimeSlot">
                    <option value="Morning">Morning</option>
                    <option value="Afternoon">Afternoon</option>
                    <option value="Evening">Evening</option>
                </select>
                <input type="hidden" name="test" value="1">
                <input type="submit" id="searchButton" value="Search">
            </form>
        </div>
        <div class="advertisement">
            <a onclick="document.getElementById('advertise').submit()"><img src="pics/blackPanther.jpg"></a>
            <form id="advertise" method="POST" action="theMovie.php">
                <input type="hidden" name="MovieID" value="1">
            </form>
        </div>
    </div>


    <div class="wrapper">
        <h1 style="text-align: center; margin-bottom: 20px;">Trending</h3>
            <?php
            $servername = "localhost";
            $username = "f32ee";
            $password = "f32ee";
            $dbname = "f32ee";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = " SELECT MovieID,MovieName,Poster FROM Movies WHERE ReleaseStatus='1'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                $count = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($count % 3 == 0) {
                        echo '<div class="row">';
                    }
                    echo '<form id="' . $row["MovieID"] . '" class="rowEntry" method="post" action="theMovie.php">';
                    echo '<input type="hidden" name="MovieID" value="' . $row["MovieID"] . '">';
                    echo '<a onclick="document.getElementById(\'' . $row["MovieID"] . '\').submit();" class="entryImage"><img src="' . $row["Poster"] . '" alt="" /></a>';
                    echo '<h3>' . $row["MovieName"] . '</h3>';
                    echo '</form>';
                    $count = $count + 1;
                    if ($count % 3 == 0) {
                        echo '</div>';
                    }
                }
                if ($count % 3 != 0) {
                    echo '</div>';
                }
            } else {
                echo "sql error";
            }
            mysqli_close($conn);
            ?>
    </div>
</body>

</html>