<!DOCTYPE html>
<html>

<head>
    <title>Movie</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="myStyle.css" />
</head>

<body style="margin: 0;">
<header class="topnav">
        <img src="pics/logo.png">
        <a href="upcoming.php">Upcoming</a>
        <a href="now-showing.php">Now Showing</a>
        <a href="home.php">Home</a>
    </header>
    <div class="introduction wrapper">  
        <?php
        $servername = "localhost";
        $username = "f32ee";
        $password = "f32ee";
        $dbname = "f32ee";
        $target = $_POST["MovieID"];

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = " SELECT * FROM Movies where MovieID=$target";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            echo '<div class="poster">';
            echo '<img src="' . $row["Poster"] . '">';
            echo '</div>';
            echo '<div class="information">';
            echo '<dl>';
            echo '<dt>Name:</dt>';
            echo '<dd>' . $row["MovieName"] . '</dd>';
            echo '<dt>Actors:</dt>';
            echo '<dd>' . $row["Actors"] . '</dd>';
            echo '<dt>Directors:</dt>';
            echo '<dd>' . $row["Actors"] . '</dd>';
            echo '<dt>Release Time:</dt>';
            echo '<dd>' . $row["ReleaseTime"] . '</dd>';
            echo '<dt>Descriptions:</dt>';
            echo '<dd>' . $row["Descriptions"] . '</dd>';
            echo '</dl>';
            echo '</div>';
            // echo '<div class="trailer">';
            // echo $row["Trailer"];
            // echo '</div>';
        } else {
            echo "sql error";
        }
        $sql = " SELECT TimeSlot from TimeSlotSeats where MovieID=$target";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            echo "sql error";
        }
        if (mysqli_num_rows($result) > 0) {
            $timeslot = mysqli_fetch_assoc($result);
        }
    else{
            $timeslot = null;
        }
        mysqli_close($conn);
        ?>
        <form id="bookForm" method="POST" action="seats.php">
            <label for="timeslot">Choose a time:</label>
            <select id="timeSlot" name="TimeSlot" form="bookForm">
                <?php
                    if(!$timeslot){
                        echo "<option>no Time slot</option>";
                    } 
                    else{
                        foreach($timeslot as $val){
                            echo '<option value="'.$val.'">'.$val.'</option>';
                        }
                    }
                ?>
            </select>
            <input type="hidden" name="MovieID" value="<?php echo $target?>">
            <input type="submit" value="Book!">
        </form>
        
    </div>

</body>

</html>