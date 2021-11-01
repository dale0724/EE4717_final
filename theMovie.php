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

$sql = " SELECT * FROM Movies";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "result fetch error<br>";
        $movieName = $row["MovieName"];
        foreach($row as $key=>$val){
            echo $key.": ".$val."<br>";
        }
        
    }
} else {
    echo "sql error";
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>

<head>
    <title><?php $movieName ?></title>
</head>

<body>
    <?php echo $movieName ?>
</body>

</html>