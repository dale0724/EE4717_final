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

// sql to create table

$sql ="CREATE TABLE  Tickets(
TicketID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
MovieID INT(6) UNSIGNED not null,
CinemaID  INT(6) UNSIGNED not null,
TimeSlot timestamp not null,
Hall varchar(20) not null,
Seat varchar(20) not null
);";


if (mysqli_query($conn, $sql)) {
    echo "Table MySalesQuantities created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>