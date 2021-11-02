
        <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Template</title>
        <link rel="stylesheet" href="myStyle.css">
    </head>
    <body style="margin: 0;">
    <header class="topnav">
        <img src="pics/logo.png">
        <a href="upcoming.php">Upcoming</a>
        <a href="now-showing.php">Now Showing</a>
        <a href="home.php">Home</a>
    </header>
        <div class="introduction wrapper" style="text-align: center;">
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

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = " INSERT INTO Tickets (TicketID,MovieID,TotalPrice,Seat,TimeSlot) VALUES (NULL,$movieID,$finalPrice,'$chosedSeats','$timeSlot')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
        } else {
            echo "sql error";
        }
        $sql = " UPDATE TimeSlotSeats SET Seats=$finalSeats where MovieID=$movieID AND TimeSlot='$timeSlot'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<h1>Sucess!</h1>';
            echo "<p> Ticket Code: jsdfjkvsfdsdf </p>";
        } else {
            echo "sql error";
        }
        mysqli_close($conn);
        ?>
        </div>
          
    </body>
</html>