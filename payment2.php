<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cinema Home</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="myStyle.css" />
</head>

<body style="margin:0">
<header class="topnav">
        <img src="pics/logo.png">
        <a href="upcoming.php">Upcoming</a>
        <a href="now-showing.php">Now Showing</a>
        <a  href="home.php">Home</a>
    </header>
    <div class="introduction wrapper">
        <?php
        $servername = "localhost";
        $username = "f32ee";
        $password = "f32ee";
        $dbname = "f32ee";
        $movieID = $_POST["MovieID"];
        $timeSlot = $_POST["TimeSlot"];
        $chosedSeats = $_POST["ChosedSeats"];
        $finalPrice = $_POST["FinalPrice"];
        $finalSeats = $_POST["FinalSeats"];
        // echo $movieID."<br>";
        // echo $timeSlot."<br>";
        // echo $chosedSeats."<br>";
        // echo $finlaPrice."<br>";
        // echo $finalSeats."<br>";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = " SELECT * FROM TimeSlotSeats where MovieID=$movieID AND TimeSlot=\"".$timeSlot."\"";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $timeSeat = mysqli_fetch_assoc($result);
        } else {
            echo "sql error";
        }
        $sql = "SELECT * FROM Movies where MovieID=$movieID";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $movie = mysqli_fetch_assoc($result);
            echo '<div class="poster">';
            echo '<img src="' . $movie["Poster"] . '">';
            echo '</div>';
            echo '<div class="information">';
            echo '<dl>';
            echo '<dt>Name:</dt>';
            echo '<dd>' . $movie["MovieName"] . '</dd>';
            echo '<dt>Time:</dt>';
            echo '<dd>' . $timeSlot . '</dd>';
            echo '<dt>Hall:</dt>';
            echo '<dd>' . $timeSeat["Hall"] . '</dd>';
            echo '<dt>Seats:</dt>';
            echo '<dd>' . $chosedSeats . '</dd>';
            echo '<dt>Total Price:</dt>';
            echo '<dd>$' . $finalPrice . '</dd>';
            echo '</dl>';
            echo '</div>';
            echo '<div class="trailer">';
            echo $row["Trailer"];
            echo '</div>';
        } else {
            echo "sql error";
        }
        mysqli_close($conn);
        ?>
        <form method="POST" action="success.php">
            <label class="payment" for="cardName">*Card Holder:</label>
            <input type="text" name="cardName" class="input" id="inputName" size=25 required placeholder="Enter name">
            <label class="payment" for="cardNum">*Card Number:</label>
            <input type="text" name="cardNum" class="input" id="inputNum" size=25 required placeholder="Enter card number">
            <label class="payment" for="cardCvc">*cvc:</label>
            <input type="text" name="cardCvc" class="input" id="inputCvc" size=25 required placeholder="Enter card cvc">
            <label class="payment" for="cardExpiry">* Card expiry date:</label>
            <input type="month" name="cardExpiry" class="input" id="inputDate">
            <label class="payment" for="cardEmail">*Email:</label>
            <input type="email" name="cardEmail" class="input" id="inputEmail" size=25 require placeholder="Enter email">
            <input type="hidden" id="MovieID" name="MovieID" value=<?php echo '"'.$movieID.'"';?>>
        <input type="hidden" id="TimeSlot" name="TimeSlot" value=<?php echo '"'.$timeSlot.'"';?>>
        <input type="hidden" id="FinalSeats" name="FinalSeats" value=<?php echo '"'.$finalSeats.'"';?>>
        <input type="hidden" id="FinalPrice" name="FinalPrice" value=<?php echo '"'.$finalPrice.'"';?>>
        <input type="hidden" id="ChosedSeats" name="ChosedSeats" value=<?php echo '"'.$chosedSeats.'"';?>>
            <input type="submit" id="payButton" value="Pay" class="input">
            
        </form>
        </form>
        <script type="text/javascript" src="Validation.js"></script>
    </div>

</body>

</html>