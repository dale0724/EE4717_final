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
$sql = "CREATE TABLE  Movies(
MovieID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
MoiveName VARCHAR(100) NOT NULL,
Poster VARCHAR(200) NOT NULL,
ReleaseTime TIMESTAMP NOT NULL,
ReleaseStatus varchar(20) NOT NULL,
Directors varchar(200) not null,
Actors varchar(500) not null,
Descriptions varchar(2000) not null,
Trailer varchar(200) not null
);";


if (mysqli_query($conn, $sql)) {
    echo "Table MySalesQuantities created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>